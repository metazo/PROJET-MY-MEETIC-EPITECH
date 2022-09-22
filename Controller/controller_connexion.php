<?php

public function inscription_request() {

if(isset($_POST['inscription'])){
    $nom = htmlspecialchars($_POST['nom'])??null;
    $prenom = htmlspecialchars($_POST['prenom'])??null;
    $mail = htmlspecialchars($_POST['mail'])??null;
    $mdp = sha1($_POST['mdp'])??null;
    $ville = htmlspecialchars($_POST['ville'])??null;
    $date = $_POST['date_de_naissance']??null;
    $genre = $_POST['genre']??null;

    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['date_de_naissance']) AND !empty($_POST['genre']) AND !empty($_POST['ville']) AND !empty($_POST['mail']) 
    AND !empty($_POST['mdp'])){
        $nomlength = strlen($nom);
        $prenomlength = strlen($prenom);
        $villelength = strlen($ville);
        $dateArray = explode('-',$date);
        $dateBirth = (int)$dateArray[0];
        $dateYear = (int)date("Y");



?>        