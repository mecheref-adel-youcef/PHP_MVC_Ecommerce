<?php
require_once("Model/Manager.php");

class ClientManager extends Manager
{


    public function getNews(){
        $db = parent::dbConnect();
        $req = $db->query('SELECT * FROM `product` WHERE idpro>=3');
        return $req;
    }

    public function getBestOf(){
        $db = parent::dbConnect();
        $req = $db->query('SELECT * FROM `product` WHERE quantity <= 40');
        return $req;
    }

    public function getCategorie(){
        $db = parent::dbConnect();
        $req = $db->query('SELECT * FROM `categorie`');
        return $req;
    }

    public function getProducts($id){
        $db = parent::dbConnect();
        $req = $db->prepare('SELECT * FROM `product` WHERE idcat = ?');
         $req->execute(array($id));
        return $req;
    }

    public function getCountInPanier($id){
        $db = parent::dbConnect();
        $req = $db->prepare('SELECT count(*) AS nbProducts FROM `product` p ,orders o WHERE p.idpro=o.idpro AND idp = ?');
        $req->execute(array($id));
        return $req;
    }

    public function getProductsInPanier($id){
        $db = parent::dbConnect();
        $req = $db->prepare('SELECT * FROM `product` p ,orders o WHERE p.idpro=o.idpro AND idp = ?');
        $req->execute(array($id));
        return $req;
    }

    public function addProductInPanier($idp,$idpro,$quantityStock,$quantity)
    {
        $db = parent::dbConnect();

        $req2= $db->prepare('UPDATE product SET quantity = ? WHERE idpro=?');
        $req2->execute(array(($quantityStock-$quantity),$idpro));

        $req1 = $db->query("SELECT max(ido) as counted FROM orders");
        $data = $req1->fetch();
        $ido = $data['counted'] +1;

        $req = $db->prepare('INSERT INTO orders  VALUES (?,?,?,?,?,?)');
        $affectedLines = $req->execute(array($ido,$quantity,date("Y-m-d"),"suspended",$idpro,$idp));

        return $affectedLines;
    }

    public function buyAllPanier($id)
    {
        $db = parent::dbConnect();
        $req = $db->prepare('DELETE FROM orders WHERE idp=?');
        $affectedLines = $req->execute(array($id));
        return $affectedLines;
    }

    public function buyOneProduct($idpro,$quantityStock)
    {
        $db = parent::dbConnect();
        $req2= $db->prepare('UPDATE product SET quantity = ? WHERE idpro=?');
        $affectedLines = $req2->execute(array(($quantityStock-1),$idpro));
        return $affectedLines;
    }

    public function cancelProductInPanier($idpro,$id)
    {
        $db = parent::dbConnect();
        $req2= $db->prepare('DELETE FROM orders WHERE idpro = ? AND idp = ?');
        $affectedLines = $req2->execute(array($idpro,$id));
        return $affectedLines;

    }






}