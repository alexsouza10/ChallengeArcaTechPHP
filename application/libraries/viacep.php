<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Viacep
{
    public function obterEndereco($cep)
    {
        // Formatar o CEP removendo caracteres não numéricos
        $cep = preg_replace('/[^0-9]/', '', $cep);

        // URL da API ViaCEP
        $url = "https://viacep.com.br/ws/{$cep}/json/";

        // Inicia a sessão cURL
        $ch = curl_init();

        // Configura as opções cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Executa a requisição cURL e obtém a resposta
        $response = curl_exec($ch);

        // Verifica se houve algum erro na requisição
        if (curl_errno($ch)) {
            echo 'Erro na requisição cURL: ' . curl_error($ch);
            exit();
        }

        // Fecha a sessão cURL
        curl_close($ch);

        // Decodifica a resposta JSON
        $endereco = json_decode($response, true);

        return $endereco;
    }
}
