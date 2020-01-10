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


//		$mang3 = array("sv01"=>"viet", "sv02"=>"Hung", "svss"=>"hieu");
//		echo $mang3['sv01'];
//		//duyet mang
//		foreach ($mang3 as $key => $value){
//			echo "<p>Key: ".$key."- value: ".$value."</p>";
//		}

		//test mang nhieu chieu
		$thucdon = array(
			'an_sang' => array(
				'khai_vi' => array(
					'sup' => 'luon',
					'ruou' => 'vodka'
				),
				'mon_chinh' => array(
					'com' => ' com rang',
					'pho' => 'pho bo'
				),
				'mon_trang_mieng' => array(
					'kem' => 'kem y',
					'nuoc' => 'cafe'
				)
				),
			'an_trua' => array(
				'khai_vi' => array(
					'sup' => 'luon trua',
					'ruou' => 'vodka'
				),
				'mon_chinh' => array(
					'com' => ' com rang',
					'pho' => 'pho bo'
				),
				'mon_trang_mieng' => array(
					'kem' => 'kem y',
					'nuoc' => 'cafe'
				)
			),
			'an_toi' => array(
				'khai_vi' => array(
					'sup' => 'luon toi',
					'ruou' => 'vodka'
				),
				'mon_chinh' => array(
					'com' => ' com rang',
					'pho' => 'pho bo'
				),
				'mon_trang_mieng' => array(
					'kem' => 'kem y',
					'nuoc' => 'cafe'
				)
			)
		);


		//duyet phan tu trong mang
		foreach ($thucdon as $key => $value){
			echo "<h2>Bua an: " . $key . "</h2>";

			foreach ($value as $key2 => $value2){
				echo '<h3 style="margin-bottom: 0;">'. $key2 .'</h3>';
				foreach ($value2 as $key3 => $value3){
					echo  $key3 .": ". $value3."<br/>";
				}
			}
			echo "<hr/>";
		}



	}
}
