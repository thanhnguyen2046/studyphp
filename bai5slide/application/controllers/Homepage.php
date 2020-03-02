<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('slide_model');
		$data = $this->slide_model->getSlide();
		$data = array('arrayData' => $data);
		$this ->load->view('homepage_view', $data);
	}


}
