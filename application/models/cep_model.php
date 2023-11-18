<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cep_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('viacep');
    }

    public function buscarCep($cep)
    {
        return $this->viacep->obterEndereco($cep);
    }
}
