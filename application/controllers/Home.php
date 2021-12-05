<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array("data_xiaomi" => array(), "data_apple" => array());
		$data["data_xiaomi"] = call_api("GET", base_url() . "assets/json/data_xiaomi.json");
		$data["data_apple"] = call_api("GET", base_url() . "assets/json/data_apple.json");
		$this->load->view('home', $data);
	}

	public function roadmap()
	{
		$data = array("data" => array(
			array(
				"title" => "Desember 2020",
				"content" => array(
					array("label" => "Phone List", "active" => true),
					array("label" => "Phone Detail", "active" => true)
				),
				"active" => true
			),
			array(
				"title" => "Januari 2022",
				"content" => array(
					array("label" => "Search, Filter & Share Phone", "active" => false),
					array("label" => "All Phone", "active" => false),
					array("label" => "Phone Compare", "active" => false),
					array("label" => "History Log User", "active" => false),
					array("label" => "History Page", "active" => false)
				),
				"active" => false
			),
			array(
				"title" => "Februari 2022",
				"content" => array(
					array("label" => "Phone Compare", "active" => false),
					array("label" => "Popular Phone", "active" => false),
					array("label" => "Trending Phone", "active" => false),
					array("label" => "Top 100 Phone", "active" => false)
				),
				"active" => false
			),
			array(
				"title" => "Maret 2022",
				"content" => array(
					array("label" => "Blog", "active" => false),
					array("label" => "News", "active" => false),
					array("label" => "Prosesor List", "active" => false),
					array("label" => "Prosesor Detail", "active" => false)
				),
				"active" => false
			)
		));

		$data["class"] = array(
			"list_custom" => "_" . generateRandomString(),
			"active" => "_" . generateRandomString(),
			"roadmap_active" => "_" . generateRandomString()
		);

		$data["updated"] = "4 December 2021";

		$this->load->view('roadmap', $data);
	}
}
