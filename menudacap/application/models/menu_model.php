<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function insertMenu($titleMenu,$linkMenu,$IdMenuParent)
	{
		$menuArr = array(
		  'title_menu'=>$titleMenu,
			'link_menu'=>$linkMenu,
			'parent_menu'=>$IdMenuParent
		);
		return $this->db->insert('menudacap',$menuArr);
	}
}
