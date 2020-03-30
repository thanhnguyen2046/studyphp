<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insertCategory($categoryName)
	{
		$data = array('category_name' => $categoryName);

		return $this->db->insert('newscategory', $data);
	}

	public function loadCategoryList()
	{
		$this->db->select('*');
		$dl = $this->db->get('newscategory');
		$dl = $dl->result_array();
		return $dl;
	}

	public function getCategoryById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('newscategory');
		$dl = $dl->result_array();
		return $dl;
	}

	public function updateDataById($id, $categoryName)
	{
		$dataUpdate = array('category_name' => $categoryName);
		$this->db->where('id', $id);
		return $this->db->update('newscategory', $dataUpdate);
	}

	public function removeCategoryById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('newscategory');
	}

	public function insertNews($title, $idCategory, $content, $image, $quote)
	{
		$newsArr = array('title' => $title, 'id_category' => $idCategory, 'content' => $content, 'image' => $image, 'quote' => $quote);
		$this->db->insert('newscontent', $newsArr);
		return $this->db->insert_id();
	}

	public function getNews()
	{
		$this->db->select('*');
		$newsList = $this->db->get('newscontent');
		$newsList = $newsList->result_array();
		return $newsList;
	}

	public function getNewsById($id)
	{
		$this->db->select('*');
		$this->db->from('newscategory');
		$this->db->join('newscontent', 'newscontent.id_category=newscategory.id', 'left');
		$this->db->where('newscontent.id', $id);
		$value = $this->db->get();
		$value = $value->result_array();
		return $value;
	}
	//	 cach join 2 table
	//		public function getCategoryNameByIDNews($id)
	//		{
	//			$this->db->select('*');
	//			$this->db->from('newscategory');
	//			$this->db->join('newscontent','newscontent.id_category=newscategory.id','left');
	//			$this->db->where('newscontent.id',$id);
	//			$value = $this->db->get();
	//			$value = $value->result_array();
	//			$categoryName = $value[0]['category_name'];
	//			return $categoryName;
	//		}


	public function updateNewsById($id, $title, $idCategory, $content, $image, $quote)
	{
		$newsData = array('title' => $title, 'id_category' => $idCategory, 'content' => $content, 'image' => $image, 'quote' => $quote);
		$this->db->where('id', $id);
		return $this->db->update('newscontent', $newsData);
	}

	public function deleteNewsById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('newscontent');
	}

	public function loadNewsList2($newInPage)
	{
		$this->db->select('*');
		$this->db->join('newscontent', 'newscontent.id_category = newscategory.id', 'left');
		$newList = $this->db->get('newscategory', $newInPage, 0);
		$newList = $newList->result_array();
		return $newList;
	}

	public function totalPage($newInPage)
	{
		$this->db->select('*');
		$newListAll = $this->db->get('newscontent');
		$newListAll = $newListAll->result_array();
		$totalNews = count($newListAll);
		$totalPage = ceil($totalNews / $newInPage); //round lam tron, ceil lam tron len
		return $totalPage;
	}

	public function loadNewsByPage($page, $newInPage)
	{
		$this->db->select('*');
		$this->db->join('newscontent', 'newscontent.id_category = newscategory.id', 'left');
		$offset = ($page - 1) * $newInPage;
		$newList = $this->db->get('newscategory', $newInPage, $offset);
		$newList = $newList->result_array();
		return $newList;
	}

	public function loadNewsByCategory($newInPage, $idCategory)
	{
		$this->db->select('*');
		$this->db->join('newscontent', 'newscontent.id_category = newscategory.id', 'left');
		$this->db->where('newscategory.id', $idCategory);
		$newList = $this->db->get('newscategory', $newInPage, 0);
		$newList = $newList->result_array();
		return $newList;
	}

	public function LoadRelativeNews($newInPage, $idCategory, $idNews)
	{
		$this->db->select('*');
		$this->db->join('newscontent', 'newscontent.id_category = newscategory.id', 'left');
		$this->db->where('newscategory.id', $idCategory);
		$this->db->where('newscontent.id !=', $idNews);
		$newList = $this->db->get('newscategory', $newInPage, 0);
		$newList = $newList->result_array();
		return $newList;
	}

	public function loadHeader()
	{
		$this->db->where('attr_name', 'headerManagerment');
		$arrHeader = $this->db->get('homepageattr');
		$arrHeader = $arrHeader->result_array();
		$arrHeader = $arrHeader[0]['attr_value'];
		$arrHeader = json_decode($arrHeader,true);
		return $arrHeader;
	}

	public function updateHeaderJson($headerJson)
	{
		$arrHeaderJson = array(
		  'attr_name' => 'headerManagerment',
		  'id' => 2,
		  'attr_value' => $headerJson
		);
		$this->db->where('attr_name', 'headerManagerment');
		return $this->db->update('homepageattr', $arrHeaderJson);
	}
}



