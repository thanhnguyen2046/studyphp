<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('json_model');
		$data = $this->json_model->showContacts();
		$data = json_decode($data, true);
		$data = array("arrayData" => $data);
		$this->load->view('edit_view', $data, FALSE);

	}

	public function doEdit()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$data = array();
		for ($i = 0; $i < count($name); $i++) {
			$trunggian = array();
			$trunggian['name'] = $name[$i];
			$trunggian['phone'] = $phone[$i];
			array_push($data, $trunggian);
		}
		//ma hoa
		$data = json_encode($data);
		$this->load->model('json_model');
		if ($this->json_model->updateContacts($data)) {
			$this->load->view('success');
		}
	}

}
