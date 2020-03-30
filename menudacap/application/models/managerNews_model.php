<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class managerNews_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insertNews($newsArr)
	{
		return $this->db->insert('tin',$newsArr);
	}

	public function getNews()
	{
		$this->db->select('*');
		$newsArr = $this->db->get('tin');
		$newsArr = $newsArr->result_array();
		return $newsArr;
	}

	public function getNewsByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$newsArr = $this->db->get('tin');
		$newsArr = $newsArr->result_array();
		return $newsArr;
	}



}
