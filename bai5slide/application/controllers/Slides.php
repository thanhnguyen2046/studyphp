<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}

	public function index()
	{
		$this->load->view('addslide_view');

	}

	public function addSlide()
	{
		//lay du lieu tu slidetopbanner ra
		//giai ma json
		//lay du lieu tu view ve
		//them vao json (array push)
		//ma hoa thanh json
		//update du lieu vao
		//load file


		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slideImage"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["slideImage"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
			} else {
				$uploadOk = 0;
			}
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["slideImage"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["slideImage"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}

		//end upload file
		$data = $this->slide_model->getSlide();
		$data = json_decode($data);
		if($data == null){
			echo "empty Data!";
			$data = array();
		}

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$btnLink = $this->input->post('btnLink');
		$btnText = $this->input->post('btnText');
		$slideImage = base_url().'uploads/'.basename($_FILES["slideImage"]["name"]);

		// echo "<pre>";
		// var_dump($slideImage);
		// var_dump($title);
		// var_dump($description);
		// var_dump($btnLink);
		// var_dump($btnText);

		// echo "</pre>";

		$aSlideImage = array(
			'title' => $title,
			'description' => $description,
			'btnLink' => $btnLink,
			'btnText' => $btnText,
			'slideImage' => $slideImage
		);
		array_push($data, $aSlideImage);
		$data = json_encode($data);

		if($this->slide_model->updateSlide($data)){
			$this->load->view('success');
		}
	}
}
