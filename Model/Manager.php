<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=mini-projet-web;charset=utf8', 'root', '');
        return $db;
    }
}