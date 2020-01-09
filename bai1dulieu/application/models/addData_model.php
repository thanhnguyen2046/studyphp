<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addData_model extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	//difine bd => autoload $autoload['libraries'] = array('database');
	public function insert($s,$g)
	{
		$data = array('so' => $s, 'gia' => $g);
		$this->db->insert('so_sim', $data);
		return $this->db->insert_id(); //tra ve id cua phan tu
	}


}
