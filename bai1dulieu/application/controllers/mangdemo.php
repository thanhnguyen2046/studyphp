<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mangdemo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
//		$sv[0] = "Viet";
//		$sv[1] = "Hung";
//		$sv[2] = "Hieu";
//
//		$mang2 = array('Viet', 'Hung', 'hieu');
//
//		for($i = 0; $i<3; $i++){
//			echo "<pre>";
//			echo $mang2[$i];
//			echo "</pre>";
//		}


		$mang3 = array("sv01"=>"viet", "sv02"=>"Hung", "svss"=>"hieu");
		echo $mang3['sv01'];
		//duyet mang
		foreach ($mang3 as $key => $value){
			echo "<p>Key: ".$key."- value: ".$value."</p>";
		}
	}


}
