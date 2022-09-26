<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;port=3306;dbname=meetic;charset=UTF8', 'metazo', 'password');
if(isset($_POST['formconnexion'])){
    if(!empty($_POST['mailconnect']) AND !empty($_POST['mdpconnect'])) {
        $mail = htmlspecialchars($_POST['mailconnect']);
        $mdp = sha1($_POST['mdpconnect']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE mailconnect = ? AND mdpconnect = ?');
        $recupUser->execute(array($mail, $mdp));

        if($recupUser->rowCount() > 0){
            $_SESSION['mailconnect'] = $mail;
            $_SESSION['mdpconnect'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            echo $_SESSION['id'];
        }else {
            echo "votre email ou mot de passe est incorect !";
        }
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
    <link rel="stylesheet" href="./CSS/connexion.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Connexion</title>
</head>

<body style="background-image: url(./Images/backgroundConnexion.jpg);">
<nav>

<input type="checkbox" id="check">

<label for="check" class="checkbtn">

<i class="fas fa-bars"></i>

</label>

<label class="logo">My meetic</label>

<ul>

<li><a class="active" href="#">Accueil</a></li>

<li><a href="./index.php" >S'inscrire</a></li>

<li><a href="#">Se connecter</a></li>

<li><a href="#">Mon compte</a></li>

<li><a href="./search.php">Rechercher</a></li>

</ul>

</nav>
    <div class="box">
        <form method="POST" action="">
            <span class="text-center">Connexion</span>
            <div class="connexion">

                <div class="input-container">
                    <input type="email" name="mailconnect" id="mailconnect" placeholder="mail" value="<?php if (isset($_POST["mail"])) {
                                                                                        echo $_POST["mail"];
                                                                                    } ?>" />
                    <label for="mailconnect">Votre mail :</label>
                </div>
                <div class="input-container">
                    <input type="password" name="mdpconnect" id="password" placeholder="mot de passe" />
                    <label for="password">Votre mot de passe :</label>
                    <input type="checkbox" onclick="myFunction()"><p style="color: white;">Afficher le mot de passe</p>

                </div>
                <span id="alerte">   
                <br />
                <input type="submit" name="formconnexion" value="Se connecter" class="btn" />
                <br>
                <div class="Inscrit">
                    <a href="index.php">
                        <span class="thin">Pas encore</span><span class="thick"> de compte ?</span>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>

</html>