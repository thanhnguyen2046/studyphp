<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	private $newInPage;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->newInPage = 2;
	}

	public function index()
	{
		$newsList = $this->news_model->loadNewsList2($this->newInPage);
		$totalPage = $this->news_model->totalPage($this->newInPage);
		$categoryList = $this->news_model->loadCategoryList();
		$headerArr = $this->news_model->loadHeader();
		$data = array(
		  "headerArr"=>$headerArr,
		  "newsList" => $newsList,
		  "totalPage" => $totalPage,
		  "categoryList" => $categoryList
		);

		$this->load->view('news_view', $data, FALSE);
	}

	public function page($page)
	{
		$newsList = $this->news_model->loadNewsByPage($page, $this->newInPage);
		$totalPage = $this->news_model->totalPage($this->newInPage);
		$categoryList = $this->news_model->loadCategoryList();
		$data = array(
		  "newsList" => $newsList,
		  "totalPage" => $totalPage,
		  "categoryList" => $categoryList
		);

		$this->load->view('news_view', $data, False);
	}

	public function newsDetail($id)
	{
		$newsDetail = $this->news_model->getNewsById($id);
		$categoryList = $this->news_model->loadCategoryList();

		$idCategory = $newsDetail[0]['id_category'];
		$newsByCategory = $this->news_model->LoadRelativeNews(3, $idCategory, $id);

		//session
		$dataUser = array(
		  'suachua' => 'vinamilk',
		  'suatuoi' => 'THTRUEMILK'
		);

		$this->session->set_userdata($dataUser);
		$arrayDataUserRemove = array('suachua', 'suatuoi');
		$this->session->unset_userdata($arrayDataUserRemove);

		//$this->session->unset_userdata('suachua');
		//	$this->session->set_userdata('suachua','day la sua chua vinamilk');
		//	$this->session->set_userdata('suatuoi','THTRUEMILK');


		$newsDetail = array(
		  "newsDetail" => $newsDetail,
		  "categoryList" => $categoryList,
		  "newsByCategory" => $newsByCategory
		);
		$this->load->view('news_detail', $newsDetail, FALSE);
	}

	public function category($id)
	{


		$newsList = $this->news_model->loadNewsByCategory($this->newInPage, $id);
		$totalPage = $this->news_model->totalPage($this->newInPage);
		$categoryList = $this->news_model->loadCategoryList();
		$data = array(
		  "newsList" => $newsList,
		  "totalPage" => $totalPage,
		  "categoryList" => $categoryList
		);
		$this->load->view('news_view', $data, FALSE);
	}

	public function addHeader()
	{
		$headerData = array(
		  'social' => array(
			'linkFacebook' => 'https://www.facebook.com/',
			'linkTwitter' => 'https://www.facebook.com/',
			'linkPinterest' => 'pinterest',
			'linkGooglePlus' => 'pinterest'
		  ),
		  'hotLineNumber' => array(
			'hotlineText' => 'Call for reservation:',
			'hotlineNumber' => '011 29 345 678'
		  ),
		  'openTime' => array(
			'openText' => 'Opening Hours :',
			'openTime' => '9:00am - 10:00pm'
		  ),
		  'logo' => 'http://localhost.bai5slide/images/logo.png'
		);

		$headerData = json_encode($headerData);
		if ($this->news_model->updateHeaderJson($headerData)) {
			echo 'success';
		} else {
			echo 'fail';
		}
	}

	public function headerManagerment()
	{
		$headerArr = $this->news_model->loadHeader();
		$headerArr = array(
		  "headerArr"=>$headerArr
		);
		$this->load->view('header_managerment',$headerArr);
	}

	public function editHeader()
	{
		$oldLogo = $this->input->post('oldLogo');
		$logo = $_FILES["logo"]["name"];
		if(empty($logo)){
			$logo = $oldLogo;
		}else{
			$target_dir = "logo/";
			$target_file = $target_dir . basename($_FILES["logo"]["name"]);
			move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
			$logo = base_url() . 'logo/' . basename($_FILES["logo"]["name"]);
		}


		$linkFacebook = $this->input->post('linkFacebook');
		$linkTwitter = $this->input->post('linkTwitter');
		$linkPinterest = $this->input->post('linkPinterest');
		$linkGooglePlus = $this->input->post('linkGooglePlus');
		$hotlineText = $this->input->post('hotlineText');
		$hotlineNumber = $this->input->post('hotlineNumber');
		$openText = $this->input->post('openText');
		$openTime = $this->input->post('openTime');

		$headerData = array(
		  'social' => array(
			'linkFacebook' => $linkFacebook,
			'linkTwitter' => $linkTwitter,
			'linkPinterest' => $linkPinterest,
			'linkGooglePlus' => $linkGooglePlus
		  ),
		  'hotLineNumber' => array(
			'hotlineText' => $hotlineText,
			'hotlineNumber' => $hotlineNumber
		  ),
		  'openTime' => array(
			'openText' => $openText,
			'openTime' => $openTime
		  ),
		  'logo' => $logo
		);
		$headerData = json_encode($headerData);
		if($this->news_model->updateHeaderJson($headerData))
		{
			$this->load->view('success3');
		}else{
			echo 'faile';
		}
	}
}
