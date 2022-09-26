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
            $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

            $requete = "SELECT  * FROM users WHERE mail = :mail ";
            $prepare = $dbconnect->prepare("".$requete."");
            $prepare->bindParam(':mail', $email, PDO::PARAM_STR);
            $prepare->execute();


            $resultat = $prepare->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}

$user = new User();
var_dump($user->verif_email("metazo@mail.com"));

    ?>