<?php
/**
 * Created by PhpStorm.
 * User: Joseph_Youcef
 * Date: 12/02/2019
 * Time: 01:25
 */

class AdminManager  extends Manager
{

    public function test_connexion($email,$password)
    {
        //25f9e794323b453885f5181f1b624d0b
        $db = parent::dbConnect();
        $req = $db->query("SELECT * FROM person WHERE email = '$email' AND mdp = '$password'");
        return $req;
    }

    public function inscription($first_name,$last_name,$email,$password_1,$adress){

        $db = parent::dbConnect();
        $req1 = $db->query("SELECT max(idp) as counted FROM person");
        $data = $req1->fetch();
        $idp = $data['counted'] +1;
        $req = $db->prepare('INSERT INTO person (idp,first_name,last_name,email,mdp,adress,type) VALUES (?,?,?,?,?,?,?)');
        $affectedLines = $req->execute(array($idp,$first_name,$last_name,$email,$password_1,$adress,'client'));
        $tab = array('id'=>$idp,'affectedLines'=>$affectedLines);
        return $tab;
    }





}