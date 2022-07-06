<?php

namespace APP\Controller;

use APP\Model\Validation;
use APP\Utils\Redirect;
use APP\Model\Product;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(
        message:'Requisição inválida!!!',
        type: 'error'
    );
}

$productName = $_POST["name"];
$productPrice = (float) $_POST["price"];
$productQuantity = (float) $_POST["quantity"];

$error = array();

if(!Validation::validateName($productName)){
    array_push($error, "O nome do produto deve conter ao menos 5 caracteres!!!");
}

if(!Validation::validateNumber($productPrice)){
    array_push($error, "O preço do produto deve ser maior que zero!!!");
}

if(!Validation::validateQuantity($productQuantity)){
    array_push($error, "A quantidade do produto deve ser maior que zero!!!");
}

if($error){// Se existerem erros
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $product = new Product(
        name: $productName,
        quantity: $productQuantity,
        price: $productPrice
    );

    // TODO Salvar no banco de dados

    Redirect::redirect(
        message: "Produto cadastrado com sucesso!!!"
    );
}