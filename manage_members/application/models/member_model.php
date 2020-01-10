<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member_model extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function insertMemberMysql($name,$age,$phone,$avatar,$facebook,$order)
	{
		$data = array(
			'name' => $name,
			'age' => $age,
			'phone_number' => $phone,
			'avatar' => $avatar,
			'facebook' => $facebook,
			'total_order' => $order
		);
		$this->db->insert('member_list', $data);
		return $this->db->insert_id();
	}
}
