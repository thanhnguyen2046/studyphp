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
		echo "first controller";
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
		$id = $this->input->post('id');
		$categoryName= $this->input->post('categoryName');

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

}
