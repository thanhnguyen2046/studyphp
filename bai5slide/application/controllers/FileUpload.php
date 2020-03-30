<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileUpload extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('upload_view');
	}

	public function uploadFile()
	{

		$config['upload_path'] = './upload_images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());

			echo "<pre>";
			var_dump($error);
			echo "</pre>";
		} else {
			$data = array('upload_data' => $this->upload->data());
			$dataImage = $this->upload->data();
			//			echo "<pre>";
			//			var_dump($dataImage);
			//			echo "</pre>";
			echo base_url() . 'upload_images/' . $dataImage['file_name'];
		}
	}

	public function formResizeImage()
	{
		$this->load->view('resize_image_view');
	}

	public function resizeImage()
	{

		$config['upload_path'] = './upload_images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());

			echo "<pre>";
			var_dump($error);
			echo "</pre>";
		} else {
			$data = $this->upload->data();
			echo base_url() . 'upload_images/' . $data['file_name'];

			//resize image
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'upload_images/' . $data['file_name'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 100;
			$config['height'] = 100;

			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config); // apply new config when resize
			$this->image_lib->resize();
		}
	}

	public function formCropImage()
	{
		$this->load->view('crop_image_view');
	}

	public function cropImage()
	{
		$config['upload_path'] = './upload_images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());

			echo "<pre>";
			var_dump($error);
			echo "</pre>";
		} else {
			$data = $this->upload->data();
			echo base_url() . 'upload_images/' . $data['file_name'];

			//resize image
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'upload_images/' . $data['file_name'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['master_dim'] = 'height';
			$config['width'] = 300;
			$config['height'] = 300;

			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config); // apply new config when resize
			//$this->image_lib->resize()

			//crop
			if ($this->image_lib->resize()) {
				$config['image_library'] = 'gd2';
				$config['source_image'] = 'upload_images/' . $data['raw_name'] . '_thumb' . $data['file_ext'];
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = FALSE;
				$config['width'] = 300;
				$config['height'] = 300;
				$this->load->library('image_lib', $config);
				$this->image_lib->initialize($config); // apply new config when resize
				$this->image_lib->crop();
			}
		}
	}

	public function watermarkImageForm()
	{
		$this->load->view('watermark_image_view');
	}


	public function watermarkImage()
	{
		$config['upload_path'] = './upload_images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100000;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());

			echo "<pre>";
			var_dump($error);
			echo "</pre>";
		} else {
			$data = $this->upload->data();
			echo base_url() . 'upload_images/' . $data['file_name'];

			//gan watermark
			$config['source_image'] = 'upload_images/' . $data['file_name'];
			$config['wm_type'] = 'overlay';
			$config['wm_overlay_path'] = 'images/logo.png';
			$config['wm_vrt_alignment'] = 'bottom';
			$config['wm_hor_alignment'] = 'center';
			//gan text
			//			$config['wm_text'] = 'Copyright 2006 - John Doe';
			//			$config['wm_type'] = 'text';
			//			$config['wm_font_path'] = './system/fonts/texb.ttf';
			//			$config['wm_font_size'] = '16';
			//			$config['wm_font_color'] = 'ffffff';
			//			$config['wm_padding'] = '20';
			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config);

			$this->image_lib->watermark();
		}
	}
}

