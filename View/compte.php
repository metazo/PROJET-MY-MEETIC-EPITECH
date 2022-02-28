
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./CSS/accueil.css">
    <title>Accueil</title>
</head>

<body>
    <header>
        <h1 id="title">MY MEETIC</h1>
        <div class="header">
            <div class="left-head">

                <div class="logo">
                    <img src="./Images/search.jpg" alt="logo">
                </div>
                <a href="#" class="toggle-nav">|||</a>
            </div>
            <div class="nice-nav">
                <div class="user-info clear">
                    <div class="user-name ">
                        <h5 id="Prenom">Commencez</h5>
                        <span id="Nom">quelque chose de réel *</span>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="containerUl">
                    <ul>
                        <li class="child-menu">
                            <a href="#"><span>Accueil</span> <span class="fa fa-angle-right toggle-right">▾</span>
                            </a>
                            <ul class="child-menu-ul">
                                <li>
                                    <a href="#">Votre Profil</a>
                                </li>
                                <li>
                                    <a href="#">Modifier votre Profil</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body-part"></div>
        <a href="" class="btn">Se déconnecter</a>
    </header>
    <div class="slider">
        <ul class="slides">
            <li class="slide"><img src="./Images/backgroundConnexion.jpg" alt="image1"></li>
            <li class="slide"><img src="./Images/backgroundRegister.jpg" alt="image2"></li>
           
            
        </ul>
    </div>
    <script src="View/JS/headerMenu.js"></script>
</body>

</html>
