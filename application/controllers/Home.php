<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data = call_api("GET", base_api() . "phone-lists");
		$this->load->view('home', $data);
	}

	public function get_index_html(){
		save_to_file(base_url(), "home.html");
		save_to_file(base_url() . "phone/1", "phone_detail_1.html");
		save_to_file(base_url() . "phone/1421", "phone_detail_1421.html");
		save_to_file(base_url() . "phone/list/oppo", "phone_list.html");
		save_to_file(base_url() . "roadmap", "roadmap.html");
		save_to_file(base_url() . "our-team", "our-team.html");
		echo "here :D";
		die();
	}

	public function roadmap()
	{
		// Data RoadMap
		$data = array("data" => array(
			array(
				"title" => "Q4 2021",
				"content" => array(
					array("label" => "Phone List & Detail", "active" => true)
				),
				"active" => true
			),
			array(
				"title" => "Q1 2022",
				"content" => array(
					array("label" => "All Phone", "active" => true),
					array("label" => "Search, Filter & Share Phone", "active" => true),
					array("label" => "Phone Compare", "active" => false),
					array("label" => "Popular Phone", "active" => false),
					array("label" => "Trending Phone", "active" => false),
					array("label" => "Top 100 Phone", "active" => false),
					array("label" => "GI-BOT Characters", "active" => false),
					array("label" => "Blog, News", "active" => false),
					array("label" => "Processor List & Detail", "active" => false)
				),
				"active" => false
			),
			array(
				"title" => "Q2 2022",
				"content" => array(
					array("label" => "360 Image Phone", "active" => false),
					array("label" => "Motherboard List & Detail", "active" => false),
					array("label" => "RAM List & Detail", "active" => false),
					array("label" => "Beranda", "active" => false),
					array("label" => "Member Area", "active" => false),
					array("label" => "Forum", "active" => false),
					array("label" => "Review", "active" => false),
					array("label" => "Profile", "active" => false),
					array("label" => "Login by Google & Facebook", "active" => false),
				),
				"active" => false
			),
			array(
				"title" => "Q3 2022",
				"content" => array(
					array("label" => "VGA List & Detail", "active" => false),
					array("label" => "Login by Twitter & Github", "active" => false),
					array("label" => "Two Factor Authentication (2FA)", "active" => false),
					array("label" => "User Level, Badge, Point", "active" => false),
					array("label" => "Android Alpha!", "active" => false)
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

	public function brands(){
		$data = call_api("GET", base_api() . "brands");
		$this->load->view('brands', $data);
	}

	public function our_team(){
		$data = array("data" => array(
			(object)array("name" => "Hermawan", "position" => "CEO"), 
			(object)array("name" => "Wildan", "position" => "COO"), 
			(object)array("name" => "Yasir", "position" => "CTO"), 
			(object)array("name" => "Syifa", "position" => "CMO")
		));
		$this->load->view('our-team', $data);
	}
}
