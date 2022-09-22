<?php
class User {
    private $dbconnect;

    function verif_email($email){
        try{

            $server = '127.0.0.1';
            $db = 'meetic';
            $user = 'metazo';
            $pass = 'password';
            $dbconnect = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $user, $pass);
            var_dump($dbconnect);
            $dbconnect->setAttribute(PDO::)
        }
    }
}