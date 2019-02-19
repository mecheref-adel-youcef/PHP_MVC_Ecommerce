<?php

session_start();

require('Controller/clientController.php');
require('Controller/adminController.php');



try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'login') {
            login();
        }
        elseif ($_GET['action'] == 'singup') {
            singup();
        }
        elseif ($_GET['action'] == 'test_connexion') {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            test_connexion($email,$password);
        }
        elseif ($_GET['action'] == 'home') {
            $type = $_GET['type'];
            success($type);
        }
        elseif ($_GET['action'] == 'logout') {
            logout();
        }
        elseif ($_GET['action'] == 'inscription') {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $adress = $_POST['adress'];
            $password_1 = md5($_POST['password_1']);
            $password_2 = md5($_POST['password_2']);
            inscription($first_name,$last_name,$email,$password_1,$password_2,$adress);

        }
        elseif ($_GET['action'] == 'product-by-categorie') {
            $id = $_GET['id'];
            if (isset($id) && $id > 0) {
                getProducts($id);

            }else {
                throw new Exception('id is not set');
            }
        }
        elseif ($_GET['action'] == 'listProductsInPanier') {
            getProductsInPanier();
        }
        elseif ($_GET['action'] == 'addProductInPanier') {
            $idpro = $_POST['idpro'];
            if (isset($idpro) && $idpro > 0) {
                $quantityStock = $_POST['quantityStock'];
                $quantity = $_POST['quantity'];
                addProductInPanier($idpro,$quantityStock,$quantity);

            }else {
                throw new Exception('id is not set');
            }

        }
        elseif ($_GET['action'] == 'buyAllPanier') {
            buyAllPanier();
        }
        elseif ($_GET['action'] == 'buyOneProduct') {
            $idpro = $_GET['idpro'];
            if (isset($idpro) && $idpro > 0) {
                $quantityStock = $_GET['quantityStock'];
                buyOneProduct($idpro,$quantityStock);
            }else {
                throw new Exception('id is not set');
            }
        }
        elseif ($_GET['action'] == 'cancelProductInPanier') {
            $idpro = $_GET['id'];
            if (isset($idpro) && $idpro > 0) {
                cancelProductInPanier($idpro);
            }else {
                throw new Exception('id is not set');
            }
        }



    }
    else {
        login();
    }
}
catch(Exception $e) {
    echo 'Error : ' . $e->getMessage();
}
