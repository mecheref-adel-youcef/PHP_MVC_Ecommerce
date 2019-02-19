<?php
/**
 * Created by PhpStorm.
 * User: Joseph_Youcef
 * Date: 12/02/2019
 * Time: 01:27
 */




// Chargement des classes
require_once("Model/AdminManager.php");



function login()
{
    if (isset($_SESSION['first_name'])){
        header('Location: index.php?action=home&type='.$_SESSION['type']);
    } else{
        require('View/login.php');
    }
}

function singup()
{
    require('View/singup.php');
}

function test_connexion($email,$password)
{
    $adminManager = new AdminManager();

    $req =  $adminManager->test_connexion($email,$password);
     if ($data = $req->fetch()){
         $_SESSION['type'] = $data['type'];
         $_SESSION['id'] = $data['idp'];
         $_SESSION['first_name'] = $data['first_name'];
         $_SESSION['success'] = 'You are now logged in';
         if($data['type'] == 'admin')
             header('Location: index.php?action=home&type=admin');
         else
             header('Location: index.php?action=home&type=client');

     } else{
         $errors = "Wrong username/password combination";
         require ('View/login.php');
     }

}

function success($type){
    if($type == 'client'){
        $clientManager = new ClientManager(); // Création d'un objet
        $new_products = $clientManager->getNews(); // Appel d'une fonction de cet objet
        $best_products = $clientManager->getBestOf();
        $categories = $clientManager->getCategorie();
        $countInPanier =  $clientManager->getCountInPanier($_SESSION['id']);
        require('View/home.php');
    } else{
        require('View/adminView.php');
    }

}

function logout(){
        session_destroy();
        unset($_SESSION['first_name']);
    header('location: index.php?action=login');
}

function inscription($first_name,$last_name,$email,$password_1,$password_2,$adress){
    if($password_1!=$password_2){
        $errors = "please repeat the password correctly ! ";
        require ('View/singup.php');

    } else{
        $adminManager = new AdminManager();

        $tab = $adminManager->inscription($first_name,$last_name,$email,$password_1,$adress);


        if ($tab['affectedLines'] === false) {
            throw new Exception('Impossible to add a person !');
        }
        else {
            $_SESSION['type'] = 'client';
            $_SESSION['id'] = $tab['id'];
            $_SESSION['first_name'] = $first_name;
            $_SESSION['success'] = 'You are now logged in';
            header('Location: index.php?action=home');
        }
    }
}
