<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerNews extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('managerNews_model');
	}

	public function index()
	{
		$this->load->view('manager_news_view.php');

	}

	public function addNew()
	{
		$newsArr = array(
		  'title' => $this->input->post('title'),
		  'link' => $this->input->post('link'),
		  'content' => $this->input->post('content')
		);
		if($this->managerNews_model->insertNews($newsArr))
		{
			echo "success";
		}else{
			echo "fail";
		}
	}

	public function loadNews()
	{
		$newsArr = $this->managerNews_model->getNews();
		foreach ($newsArr as $news){
			echo "<li><a href='".base_url()."ManagerNews/".$news['link'].".".$news['id']."'>".$news['title']."</a></li>";
		}
		echo "</ul>";
	}

	public function newsDetail($id,$link)
	{
		$newsArr = $this->managerNews_model->getNewsByID($id);
		foreach ($newsArr as $news){
			echo "<h2>".$news['title']."</h2>";
			echo "<p>".$news['content']."</p>";
		}

	}

	//edit config->router

	


}
