<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cep extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->library('curl');
	}

	public function index() {
		$data['address'] = (object) [
			'cep' => '',
			'logradouro' => '',
			'bairro' => '',
			'localidade' => '', 
			'uf' => ''
		];

		$this->load->view('pages/viacep', $data);

	}

	public function consulta() {
		$cep = $this->input->post('cep');
		$data['address'] = json_decode($this->curl->consulta($cep));

		$this->load->view('cep', $data);
	}
}
