<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class json_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insertContacts($name, $data)
	{
		//tao mang du lieu
		$arrayData = array('name' => $name, 'data' => $data,);
		$this->db->insert('warehouse', $arrayData);
		return $this->db->insert_id();
	}

	public function showcontacts()
	{
		$this->db->select('*');
		$this->db->where('name', 'contact');
		$data = $this->db->get('warehouse');
		$data = $data->result_array();
		foreach ($data as $value) {
			$result = $value['data'];
		}
		return $result;
	}

	function updateContacts($data)
	{
		$this->db->where('name', 'contact');
		//tao mang luu
		$data = array('name' => 'contact', 'data' => $data);
		return $this->db->update('warehouse', $data);
	}
}
