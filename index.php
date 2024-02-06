<?php

require __DIR__.'/vendor/autoload.php';

use \App\WebService\ViaCEP;


//Verifica a exixstencia do CEP no comando
if(!isset($argv[1])) {
    die("CEP não definido");
}


//executa a consulta de CEPs
$dadosCEP = ViaCEP::consultarCEP($argv[1]);


//Imprime o Resultado
print_r($dadosCEP);