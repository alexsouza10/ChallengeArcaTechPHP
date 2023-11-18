<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function index()
	{
		$data["title"] = "Sign-up - CodeIgniter";
		$this->load->view('pages/signup', $data);

	}
}
