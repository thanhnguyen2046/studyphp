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
		$value= $this->news_model->loadCategoryList();
		$value = array('data'=>$value);
		$this->load->view('categorynews_view',$value);
	}


	public function addNewsCategory()
	{
		$categoryName = $this->input->post('categoryName');
		$this->load->model('news_model');
		if($this->news_model->insertCategory($categoryName))
		{
			$this->load->view('success1');
		}else{
			$this->load->view('fail1');
		}
	}

	public function editCategory($idCategory)
	{
	$data = $this->news_model->getDataById($idCategory);
	$data = array("arrayData"=>$data);
	$this->load->view('editcategory_view', $data, FALSE);
	}

	public function updateCategory()
	{
		//post=>ajax
		$categoryName = $this->input->post('categoryName');
		$id = $this->input->post('id');

		if($this->news_model->updateDataById($id,$categoryName))
		{
			$this->load->view('success1');
		}else{
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
		$this->load->view('manager_news_view');
	}
}
