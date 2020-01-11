<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member_model extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function insertMemberMysql($name, $age, $phone, $avatar, $facebook, $order)
	{
		$data = array('name' => $name, 'age' => $age, 'phone_number' => $phone, 'avatar' => $avatar, 'facebook' => $facebook, 'total_order' => $order);
		$this->db->insert('member_list', $data);
		return $this->db->insert_id();
	}

	public function getAllMember()
	{
		$this->db->select('*');
		$data = $this->db->get('member_list');
		$data = $data->result_array();
		return $data;
	}

	public function getMemberById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$data = $this->db->get('member_list');
		$data = $data->result_array();
		return $data;
	}

	public function updateMemberById($id,$name,$age,$phone,$avatar,$facebook,$order)
	{
		$updatedata = array(
			'id' => $id,
			'name' => $name,
			'age' => $age,
			'phone_number' => $phone,
			'avatar' => $avatar,
			'facebook' => $facebook,
			'total_order' => $order
		);
		$this->db->where('id',$id);
		 return $this->db->update('member_list', $updatedata);
	}

	public function removeMemberById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('member_list');
	}
}
