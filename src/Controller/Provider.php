<?php

namespace APP\Controller;

use APP\Model\Validation;
use APP\Utils\Redirect;
use APP\Model\Provider;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message:'Requisição inválida!!!',
        type: 'error'
    );
}

$providerName = $_POST["name"];
$providerPhone = (float) $_POST["phone"];
$providerCNPJ = (float) $_POST["cnpj"];
$providerAddress = $_POST["address"];

$error = array();

if(!Validation::validateName($providerName)){
    array_push($error, "O nome do fornecedor deve conter ao menos 5 caracteres!!!");
}

if(!Validation::validatePhone($providerPhone)){
    array_push($error, "O número de telefone deve conter ao menos 10 caracteres!!!");
}

if(!Validation::validateCNPJ($providerCNPJ)){
    array_push($error, "O CNPJ do fornecedor deve conter 14 caracteres!!!");
}

if(!Validation::validateAddress($providerAddress)){
    array_push($error, "O endereço do fornecedor deve conter ao menos 10 caracteres!!!");
}

if($error){// Se existerem erros
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $provider = new Provider(
        name: $providerName,
        phone: $providerPhone,
        cnpj: $providerCNPJ,
        address: $providerAddress
    );

    // TODO Salvar no banco de dados

    Redirect::redirect(
        message: "Provedor cadastrada com sucesso!!!"
    );
}