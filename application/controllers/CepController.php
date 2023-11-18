<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CepController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('viacep');
    }

	public function index()
	{
		$cep = '01041001'; // Exemplo de CEP
	
		// Chama o método obterEndereco da biblioteca Viacep para obter os dados
		$data['address'] = $this->viacep->obterEndereco($cep);
	
		// Carrega a view com os dados do endereço
		$this->load->view('pages/viacep', $data);
	
		// Verifica se o CEP desejado é igual ao retornado pela API
		if ($cep == $data['address']['cep']) {
			return $cep;
		}
    }
}
