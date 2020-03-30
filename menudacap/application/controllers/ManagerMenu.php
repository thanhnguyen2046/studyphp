<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerMenu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}

	public function index()
	{
		$this->load->view('menu_view.php');

	}

	public function addMenu()
	{
		$titleMenu = $this->input->post('titleMenu');
		$linkMenu = $this->input->post('linkMenu');
		$IdMenuParent = $this->input->post('IdMenuParent');
	    if($this->menu_model->insertMenu($titleMenu,$linkMenu,$IdMenuParent))
		{
			echo "success";
		}else{
	    	echo "fail";
		}
	}

	public function multilevelMenu($menuparent = 0)
	{
		$this->db->select('*');
		$menuArr = $this->db->get('menudacap')->result_array();
		$menuChild = array();
		foreach ($menuArr as $key=>$menu){
			if($menu['parent_menu'] == $menuparent) {
				array_push($menuChild, $menu);
			}
		}

		if($menuChild){
			echo "<ul>";
			foreach ($menuChild as $menu){
				echo "<li><a href='".$menu['link_menu']."'>".$menu['title_menu']."</a></li>";
				$this->multilevelMenu($menu['id']);
			}
			echo "</ul>";
		}
	}


}
