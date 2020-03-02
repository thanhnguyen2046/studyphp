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
		$data = array(
		  'category_name' => $categoryName
		);

		return $this->db->insert('newscategory',$data);
	}

	public function loadCategoryList()
	{
		$this->db->select('*');
		$dl = $this->db->get('newscategory');
		$dl = $dl->result_array();
		return $dl;
	}

	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$dl = $this->db->get('newscategory');
		$dl = $dl->result_array();
		return $dl;
	}

	public function updateDataById($id, $categoryName)
	{
		$dataUpdate = array(
			'category_name'=>$categoryName
		);
		$this->db->where('id',$id);
		return $this->db->update('newscategory',$dataUpdate);
	}

	public function removeCategoryById($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('newscategory');
	}

}
