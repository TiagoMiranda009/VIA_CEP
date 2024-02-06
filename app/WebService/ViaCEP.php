<?php


namespace App\WebService;

class ViaCEP {


    // Método responsavel por consultar consultarCEP
    // @param String
    // @return Array


    public static function consultarCEP($cep) {

        // Test de req
        // echo "<pre>";
        // print_r($cep);
        // echo "</pre"; exit;


        // *Inicia o cURL
        $curl = curl_init();


        // *Configurações do curl
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/', 
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);


        // *RESPONSE
        $response = curl_exec($curl);


        //Fecha a coexão aberta
        curl_close($curl);


        //converte Json para array
        $array = json_decode($response, true);


        //retornar o conteudo em array
        return isset($array['cep']) ? $array : null;
    }
    
}