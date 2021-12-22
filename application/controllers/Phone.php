<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone extends CI_Controller {

	public function index_brands($brand_id){
		$this->load->view('phone/list', array("brand_id" => urldecode($brand_id), "search" => ""));
	}

	public function index_list($search){
		$this->load->view('phone/list', array("brand_id" => "", "search" => urldecode($search)));
	}

	public function detail($slug)
	{
		$data = array(
			"phone_info" => array(),
			"phone_networks" => array(),
			"phone_launchs" => array(),
			"phone_bodys" => array(),
			"phone_displays" => array(),
			"phone_platforms" => array(),
			"phone_memorys" => array(),
			"phone_main_cameras" => array(),
			"phone_front_cameras" => array(),
			"phone_sounds" => array(),
			"phone_commss" => array(),
			"phone_features" => array(),
			"phone_batterys" => array(),
			"phone_miscs" => array(),
			"phone_tests" => array(),
			"additional_info" => (object)array(
				"release" => "", 
				"weight" => "", 
				"os" => "", 
				"storage" => "",
				"dimension" => "",
				"camera" => "",
				"ram" => "",
				"battery" => ""
			),
			"class" => array(
				"info" => "_" . generateRandomString(),
				"network" => "_" . generateRandomString(),
				"launch" => "_" . generateRandomString(),
				"body" => "_" . generateRandomString(),
				"display" => "_" . generateRandomString(),
				"platform" => "_" . generateRandomString(),
				"memory" => "_" . generateRandomString(),
				"main_camera" => "_" . generateRandomString(),
				"front_camera" => "_" . generateRandomString(),
				"sound" => "_" . generateRandomString(),
				"comms" => "_" . generateRandomString(),
				"feature" => "_" . generateRandomString(),
				"battery" => "_" . generateRandomString(),
				"misc" => "_" . generateRandomString(),
				"test" => "_" . generateRandomString(),
			)
		);

		$res = call_api("GET", base_api() . "phones/$slug");
		
		if ($res->status){
			$res = $res->data;
			$data["phone_info"] = $res->phone_info;
			$data["phone_networks"] = $res->phone_networks;
			$data["phone_launchs"] = $res->phone_launchs;
			$data["phone_bodys"] = $res->phone_bodys;
			$data["phone_displays"] = $res->phone_displays;
			$data["phone_platforms"] = $res->phone_platforms;
			$data["phone_memorys"] = $res->phone_memorys;
			$data["phone_main_cameras"] = $res->phone_main_cameras;
			$data["phone_front_cameras"] = $res->phone_front_cameras;
			$data["phone_sounds"] = $res->phone_sounds;
			$data["phone_commss"] = $res->phone_commss;
			$data["phone_features"] = $res->phone_features;
			$data["phone_batterys"] = $res->phone_batterys;
			$data["phone_miscs"] = $res->phone_miscs;
			$data["phone_tests"] = $res->phone_tests;

			if (count($res->phone_launchs) > 1) {
				$data["additional_info"]->release = $res->phone_launchs[1]->value;
				$data["additional_info"]->os = $res->phone_platforms[0]->value;
				$data["additional_info"]->memory = $res->phone_memorys[1]->value;
				$data["additional_info"]->display = $res->phone_displays[2]->value;
				$data["additional_info"]->main_camera = $res->phone_main_cameras[1]->value;
				$data["additional_info"]->battery = $res->phone_batterys[0]->value;
				
			}

		}

		$this->load->view('phone/detail', $data);
	}

	public function compare($name){
		$data = array("phone" => $name);
		$this->load->view('phone/compare', $data);
	}
}
