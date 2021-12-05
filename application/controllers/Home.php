<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = array("data" => array());
		$data["data_xiaomi"] = call_api("GET", base_url() . "assets/json/data_xiaomi.json");
		$data["data_apple"] = call_api("GET", base_url() . "assets/json/data_apple.json");
		$this->load->view('home', $data);
	}

	public function roadmap()
	{
		$this->load->view('roadmap');
	}
}
