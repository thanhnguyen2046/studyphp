<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddData_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('adddata_view');

	}

	//insert
	public function insertData_controller(){
		//lay du lieu ve
		$phoneNumber = $this->input->post('number');
		$price =  $this->input->post('price');

		//truyen du lieu vao model
		$this->load->model('addData_model');
		if($this->addData_model->insert($phoneNumber,$price)){
			//echo "insert db sucess";
			$this->load->view('thanhcong');
		}else{
			echo "insert db fail";
		}
	}
}
