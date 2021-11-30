<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone extends CI_Controller {
	public function detail($name)
	{
		$this->load->view('phone/detail');
	}
}
