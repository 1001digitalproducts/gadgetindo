<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone extends CI_Controller {
	public function detail($name)
	{
		$data = array("phone" => $name);
		$this->load->view('phone/detail', $data);
	}

	public function compare($name){
		$data = array("phone" => $name);
		$this->load->view('phone/compare', $data);
	}
}
