<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class slide_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getSlide()
	{
		$this->db->select('*');
		$this->db->where('attr_name','sliders_topbanner');
		$data = $this->db->get('homepageattr');
		$data = $data->result_array();

		foreach ($data as $value){
			$mediate = $value['attr_value'];
		}
		return $mediate;
	}

	public function updateSlide($updatedata)
	{
		$prepareDataArray = array(
			'attr_name' => 'sliders_topbanner',
			'attr_value' => $updatedata
		);
		$this->db->where('attr_name','sliders_topbanner');
		return $this->db->update('homepageattr', $prepareDataArray);
	}
}
