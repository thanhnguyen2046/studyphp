<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showData_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//$this->load->view('showdata_view');
		//load model
		$this->load->model('showData_model');
		//goi ham getdatbase
		$data = $this->showData_model->getdatabase();
		//dua ve mang
		$data = array('controllerdata' => $data);
		//		echo "<pre>";
		//		print_r($data);
		//		echo "</pre>";
		$this->load->view('showdata_view', $data, FALSE);
	}

	public function deleteData($idget)
	{
		$this->load->model('showdata_model');
		if ($this->showdata_model->deleteDataById($idget)) {
			$this->load->view('removesucess');
		} else {
			echo "remove fail";
		}
	}

	public function editSim($idtake)
	{
		$this->load->model('showdata_model');
		$result = $this->showdata_model->editDataById($idtake);
		$result = array('resultarray' => $result);
		//truyen ket qua vao view
		$this->load->view('editdata_view', $result, FALSE);
	}

	public function updateData()
	{
		//lay du lieu tu view ve
		$id = $this->input->post('id');
		$so = $this->input->post('number');
		$gia = $this->input->post('price');

//		echo "id: $id";
//		echo "so : $so";
//		echo "gia: $gia";
		$this->load->model('showData_model');
		//su dung ham trong model
		if($this->showData_model->updateDataById($id,$so,$gia))
		{
			echo "success";
		}else{
			echo "fail";
		}
	}


}
