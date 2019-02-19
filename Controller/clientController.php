<?php
/**
 * Created by PhpStorm.
 * User: Joseph_Youcef
 * Date: 12/02/2019
 * Time: 01:24
 */


// Chargement des classes
require_once("Model/ClientManager.php");




function getProducts($id){
    $clientManager = new ClientManager();
    $products = $clientManager->getProducts($id);
    require('View/listProductsView.php');
}

function getProductsInPanier(){
    $clientManager = new ClientManager();
    $products = $clientManager->getProductsInPanier($_SESSION['id']);
    require('View/panierView.php');
}

function addProductInPanier($idpro,$quantityStock,$quantity){

    $clientManager = new ClientManager(); // Création d'un objet

    $errors = "";


    if($quantity ==0){
       // $errors = "quantity must not be empty ! ";
        $_SESSION['errors'] = "quantity must not be empty ! ";
    }
    elseif($quantity > $quantityStock ){
        $_SESSION['errors'] = "the quantity requested exceeds the quantity in stock ! ";

    } else{
        $clientManager = new ClientManager();
        $affectedLines = $clientManager->addProductInPanier($_SESSION['id'],$idpro,$quantityStock,$quantity);
        if ($affectedLines === false) {
            throw new Exception('Impossible to add a product in panier !');
        }
    }

    header('Location: index.php?action=home&type=client');


}

function buyAllPanier(){
    $_SESSION['congrat'] = "congrat ^_^ wait 30 days to receive your goods";
    $clientManager = new ClientManager(); // Création d'un objet
    $affectedLines = $clientManager->buyAllPanier($_SESSION['id']);
    if ($affectedLines === false) {
        throw new Exception('Impossible to buy products in panier!');
    }
    header('Location: index.php?action=home&type=client');

}

function buyOneProduct($idpro,$quantityStock){
    $_SESSION['congrat'] = "congrat ^_^ wait 30 days to receive your goods";
    $clientManager = new ClientManager(); // Création d'un objet
    $affectedLines = $clientManager->buyOneProduct($idpro,$quantityStock);
    if ($affectedLines === false) {
        throw new Exception('Impossible to buy one product!');
    }
    header('Location: index.php?action=home&type=client');

}

function cancelProductInPanier($idpro){
    $clientManager = new ClientManager(); // Création d'un objet
    $affectedLines = $clientManager->cancelProductInPanier($idpro,$_SESSION['id']);
    if ($affectedLines === false) {
        throw new Exception('Impossible to cancel the product!');
    }
    header('Location: index.php?action=home&type=client');
}
