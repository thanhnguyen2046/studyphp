<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showdata_model extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getdatabase()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('so_sim'); //limit, offset get('so_sim', 2, 3)
		//dua ket qua thanh mang du lieu
		$ketqua = $ketqua->result_array();
		//var_dump($ketqua);
		return $ketqua;
	}

	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('so_sim');
	}

	public function editDataById($i)
	{
		$this->db->select('*');
		$this->db->where('id', $i);
		$data = $this->db->get('so_sim');
		$data = $data->result_array();
		//var_dump($data);
		return $data;
	}

	public function updateDataById($id, $so, $gia)
	{
		$updatedata = array(
			'id' => $id,
			'so' => $so,
			'gia'=> $gia
		);
		$this->db->where('id', $id);
		return $this->db->update('so_sim', $updatedata);

	}
}
