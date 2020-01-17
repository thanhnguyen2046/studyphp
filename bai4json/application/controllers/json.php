<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class json extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	{
		//		$contact = array(
		//			"name" => "viet1",
		//			"phone" => "012345678",
		//		);
		//		$contact2 = array(
		//			"name" => "viet2",
		//			"phone" => "012345678",
		//		);
		//		$contacts = array();
		//		array_push($contacts, $contact);
		//		array_push($contacts, $contact2);
		//
		//		//ma hoa thanh json
		//		$contactsJson = json_encode($contacts);

		//		$this->load->model('json_model');
		//		$data = $this->json_model->insertData('contact', $contactsJson);

		$value = $this->json_model->showContacts();
		//gia ma
		$value = json_decode($value);
		//		echo "<pre>";
		//		print_r($value);
		//		echo "</pre>";

		$value = array('arrayValue' => $value);
		$this->load->view('json_view', $value);
	}

	public function removeContact($phone)
	{
		$data = $this->json_model->showContacts();
		$data = json_decode($data);

		foreach ($data as $key => $value) {
			if ($value->phone == $phone) {
				unset($data[$key]);
			}
		}

		//ma hoa thanh chuoi json
		$data = json_encode($data);
		if ($this->json_model->updateContacts($data)) {
			$this->load->view('success');
		}
	}

	public function addContact()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		//get data
		$data = $this->json_model->showContacts();
		//giai ma thanh mang
		$data = json_decode($data, true);
		//tao phan tu con
		$child = array('name' => $name, 'phone' => $phone);
		//dua phan tu con vao mang du lieu
		array_push($data, $child);
		//ma hoa
		$data = json_encode($data);
		//goi function
		if ($this->json_model->updateContacts($data)) {
			$this->load->view('success');
		}
	}
}
