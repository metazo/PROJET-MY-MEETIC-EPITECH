<?php

$bdd = new PDO('mysql:host=127.0.0.1;port=3306;dbname=meetic;charset=UTF8', 'metazo', 'password');
if(isset($_POST['forminscription'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['date_de_naissance']) AND !empty($_POST['mail'])
    AND !empty($_POST['mdp']) AND !empty($_POST['ville']) AND !empty($_POST['genre'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO users(mail, mdp)VALUE(?, ?)');
        $insertUser->execute(array($mail, $mdp));
    } else {
        echo "veuillez compléter tous les champs !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/inscription.css">
    <title>Inscription</title>
</head>

<body style="background-image: url(./Images/backgroundRegister.jpg)">
<nav>

<input type="checkbox" id="check">

<label for="check" class="checkbtn">

<i class="fas fa-bars"></i>

</label>

<label class="logo">My meetic</label>

<ul>

<li><a class="active" href="#">Accueil</a></li>

<li><a href="#" >S'inscrire</a></li>

<li><a href="./connexion.php">Se connecter</a></li>

<li><a href="#">Mon compte</a></li>

<li><a href="./search.php">Rechercher
    
</a></li>

</ul>

</nav>

    <div class="box">
        <form method="POST" action="" class='form'>
            <span class="text-center">Inscription</span>
            <div class="text-center">

                <div class="input-container">
                    <input type="text" placeholder="Votre nom" name="nom" id="nom" value="<?php if (isset($_POST["nom"])) {
                                                                                        echo $_POST["nom"];
                                                                                    } ?>">
                    <label for="nom">Nom :</label>
                </div>
                <div class="input-container">
                    <input type="text" placeholder="Votre prénom" name="prenom" id="prenom" value="<?php if (isset($_POST["prenom"])) {
                                                                                            echo $_POST["prenom"];
                                                                                        } ?>">
                    <label for="prenom">Prénom :</label>
                </div>
                <div class="input-container">
                    <input type="date" name="date_de_naissance" id="date_de_naissance" value="<?php if (isset($_POST["date_de_naissance"])) {
                                                                                                                    echo $_POST["date_de_naissance"];
                                                                                                                } ?>">
                    <label for="date_de_naissance">Date de naissance :</label>
                </div>

                <div class="input-container">
                    <input type="email" placeholder="Votre mail" name="mail" id="e-mail" value="<?php if (isset($_POST["mail"])) {
                                                                                        echo $_POST["mail"];
                                                                                    } ?>">
                    <label for="e-mail">mail :</label>
                </div>

                <div class="input-container">
                    <input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp">
                    <label for="mdp">Mot de passe :</label>
                </div>
                <div class="input-container">
                    <input type="text" placeholder="Votre ville" name="ville" id="ville" value="<?php if (isset($_POST["ville"])) {
                                                                                            echo $_POST["ville"];
                                                                                        } ?>">
                    <label for="ville">Ville :</label>
                </div>
               
                <div class="center-align">
                    <input type="radio" name="genre" id="size_1" value="homme" />
                    <label for="size_1" class="genre">Homme</label>

                    <input type="radio" name="genre" id="size_2" value="femme" />
                    <label for="size_2" class="genre">Femme</label>

                    <input type="radio" name="genre" id="size_3" value="autre" checked />
                    <label for="size_3" class="genre">Autre</label>
                </div>
                <span id="alerte"><?php if (isset($erreur)) {
                                        echo $erreur;
                                    } ?></span>
                <br />
                <input type="submit" name="forminscription" value="Je m'inscris" class="btn">

                <div class="Inscrit">
                    <br>
                    <a href="connexion.php">
                        <span class="thin">Connectez-vous </span><span class="thick">ici !</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>