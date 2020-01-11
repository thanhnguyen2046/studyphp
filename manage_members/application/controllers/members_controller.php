<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class members_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('member_model');
		$result = $this->member_model->getAllMember();
		$result = array("arrayResult" => $result);

		//truyen du lieu sang view
		$this->load->view('members_view', $result);
	}

	public function addMember()
	{
		//xu ly avatar (https://www.w3schools.com/php/php_file_upload.asp)
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		//		if (file_exists($target_file)) {
		//			echo "Sorry, file already exists.";
		//			$uploadOk = 0;
		//		}
		// Check file size
		if ($_FILES["avatar"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
				//echo "The file " . basename($_FILES["avatar"]["name"]) . " has been uploaded.";
				echo "";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		//end xu ly avatar

		//echo "avatar name: ". $_FILES["avatar"]["name"];
		//lay duong dan
		$avatar = base_url() . "Fileupload/" . basename($_FILES["avatar"]["name"]);
		$name = $this->input->post('name');
		$age = $this->input->post('age');
		$phone = $this->input->post('phone');
		$facebook = $this->input->post('facebook');
		$order = $this->input->post('order');

		//goi model
		$this->load->model('member_model');
		$status = $this->member_model->insertMemberMysql($name, $age, $phone, $avatar, $facebook, $order);
		if ($status) {
			$this->load->view('insert_sucess_view');
		} else {
			echo "insert fail";
		}
	}


	public function editMember($idget)
	{
		$this->load->model('member_model');
		$result = $this->member_model->getMemberById($idget);
		$result = array("editMemberArray" => $result);
		$this->load->view('edit_member_view', $result, FALSE);
	}

	//---------------------------------------------------------------------------------------------------------------------------
	public function updateMember()
	{
		//xu ly avatar (https://www.w3schools.com/php/php_file_upload.asp)
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		//		if (file_exists($target_file)) {
		//			echo "Sorry, file already exists.";
		//			$uploadOk = 0;
		//		}
		// Check file size
		if ($_FILES["avatar"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
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
			if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
				//echo "The file " . basename($_FILES["avatar"]["name"]) . " has been uploaded.";
				echo "";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		//end xu ly avatar
		//kiem tra upload or not
		$avatar = basename($_FILES["avatar"]["name"]);
		if ($avatar) {
			$avatar = base_url() . "Fileupload/" . basename($_FILES["avatar"]["name"]);
		} else {
			$avatar = $this->input->post('avatarOld');
		}

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$age = $this->input->post('age');
		$phone = $this->input->post('phone');
		$facebook = $this->input->post('facebook');
		$order = $this->input->post('order');

		//truyen vao model
		$this->load->model('member_model');
		if($this->member_model->updateMemberById($id,$name,$age,$phone,$avatar,$facebook,$order)){
			$this->load->view('insert_sucess_view');
		}else{
			echo "fail";
		}

	}

	public function removeMember($id)
	{
		$this->load->model('member_model');
		if($this->member_model->removeMemberById($id)){
			$this->load->view('remove_sucess_view');
		}else{
			echo "remove fail";
		}

	}

}
