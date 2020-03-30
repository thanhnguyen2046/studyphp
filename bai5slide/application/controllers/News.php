<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$this->load->view('manager_news_view');
	}

	public function itemNews()
	{
		$value = $this->news_model->loadCategoryList();
		$value = array('data' => $value);
		$this->load->view('categorynews_view', $value);
	}


	public function addNewsCategory()
	{
		$categoryName = $this->input->post('categoryName');
		if ($this->news_model->insertCategory($categoryName)) {
			$this->load->view('success1');
		} else {
			$this->load->view('fail1');
		}
	}

	public function editCategory($idCategory)
	{
		$data = $this->news_model->getCategoryById($idCategory);
		$data = array("arrayData" => $data);
		$this->load->view('editcategory_view', $data, FALSE);
	}

	public function updateCategory()
	{
		//post=>ajax
		$categoryName = $this->input->post('categoryName');
		$id = $this->input->post('id');

		if ($this->news_model->updateDataById($id, $categoryName)) {
			$this->load->view('success1');
		} else {
			$this->load->view('fail1');
		}
	}

	public function removeCategory($id)
	{
		$this->news_model->removeCategoryById($id);
		$this->load->view('success1');
	}

	public function addJquery()
	{
		$categoryName = $this->input->post('categoryName');
		$this->news_model->insertCategory($categoryName);
		echo json_encode($this->db->insert_id());
	}

	public function managerNews()
	{
		$category = $this->news_model->loadCategoryList();
		$newsList = $this->news_model->getNews();
		$dataNews = array('newsList' => $newsList, 'category' => $category);

		$this->load->view('manager_news_view', $dataNews, FALSE);
	}


	public function addNews()
	{
		//xu ly anh tin
		//create forder upload, fileToUpload=name of input upload

		$target_dir = "uploads_news_image/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["image"]["tmp_name"]);
			if ($check !== false) {
				//	echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			//echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["image"]["size"] > 500000) {
			//echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
			//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			//echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				//echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
			}
		}


		$image = base_url() . 'uploads_news_image/' . basename($_FILES["image"]["name"]);
		//		echo "<pre>";
		//		var_dump($image);
		//		echo "</pre>";
		//		die();
		$title = $this->input->post('title');
		$idCategory = $this->input->post('id-category');
		$content = $this->input->post('content');
		$quote = $this->input->post('quote');
		if ($this->news_model->insertNews($title, $idCategory, $content, $image, $quote)) {
			$this->load->view('success2');
		} else {
			$this->load->view('fail2');
		}
	}

	public function editNews($id)
	{
		$newsEdit = $this->news_model->getNewsById($id);
		$category = $this->news_model->loadCategoryList();

		$newsEdit = array("newEdit" => $newsEdit, 'category' => $category);
		$this->load->view('edit_news_view', $newsEdit, FALSE);
	}
	//	public function editNews($id)
	//	{
	//		$newsEdit = $this->news_model->editNewsById($id);
	//		$categoryName = $this->news_model->getCategoryNameByIDNews($id);
	//
	//		$newsEdit = array(
	//		  "newEdit" => $newsEdit,
	//		  '$categoryName' => $categoryName
	//		  );
	//		$this->load->view('edit_news_view',$newsEdit,FALSE);
	//	}


	public function updateNews()
	{
		$oldImage = $this->input->post('oldImage');
		$image = $_FILES['image']['name'];
		if (empty($image)) {
			$image = $oldImage;
		} else {
			//xu ly anh tin
			//create forder upload, fileToUpload=name of input upload

			$target_dir = "uploads_news_image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if (isset($_POST["submit"])) {
				$check = getimagesize($_FILES["image"]["tmp_name"]);
				if ($check !== false) {
					//	echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				//echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["image"]["size"] > 500000) {
				//echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
				//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				//echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

				} else {
					//echo "Sorry, there was an error uploading your file.";
				}
			}
			$image = base_url() . 'uploads_news_image/' . basename($_FILES["image"]["name"]);
		}

		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$idCategory = $this->input->post('id-category');
		$content = $this->input->post('content');
		$quote = $this->input->post('quote');
		if ($this->news_model->updateNewsById($id, $title, $idCategory, $content, $image, $quote)) {
			$this->load->view('success2');
		}
	}

	public function removeNews($id)
	{
		if($this->news_model->deleteNewsById($id))
		{
			$this->load->view('success2');
		}
	}

	public function exportNews()
	{
		$category = $this->news_model->loadCategoryList();
		$newsList = $this->news_model->getNews();
		$dataNews = array('newsList' => $newsList, 'category' => $category);

		$this->load->view('export_news_view', $dataNews, FALSE);
	}
}
