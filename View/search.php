<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Rechercher</title>
    <link rel="stylesheet" href="../public/css/base.css">
    <link rel="stylesheet" href="../public/css/search.css">
    <link rel="stylesheet" href="./CSS/search.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body style="background-image: url('./Images/search.jpg');">
    <header>
        <nav>
            
            </label>
            
            <label class="logo">My meetic</label>
            
            <ul>
            
            <li><a class="active" href="#">Accueil</a></li>
            
            <li><a href="./index.php" >S'inscrire</a></li>
            
            <li><a href="./connexion.php">Se connecter</a></li>
            
            <li><a href="#">Mon compte</a></li>
            
            <li><a href="#">Rechercher</a></li>
            
            </ul>
            
            </nav>
    </header>
    <main>
    
        <div class="container">
            <div class="row">
<h1 id="search_titre">Ma recherche</h1><br>
                <div class="col-md-12 slide">
                    <form action="../controller/controller_search.php" method="POST" id="recherche" class="form">

                        <fieldset class="search_field">
                        <label>Par genre : </label>
                        <select name="genre">
                            <option value=""></option>
                            <option value="1">Homme</option>
                            <option value="0">Femme</option>
                            <option value="2">Autre</option>
                        </select>
                        <label>Par Prénom : </label>
                        <input id="prenom" name="prenom" type="text" >
                        <label>Par Ville : </label>
                        <input id="ville" name="ville" type="text">
                        <label>Par tranche d'age : </label>
                        <select name="age">
                            <option value="18-25">18-25</option>
                            <option value="25-35">25-35</option>
                            <option value="35-45">35-45</option>
                            <option value="+45">+45</option>
                        </select>
                        </fieldset>
                        <div class="loisirs">
                            <label for="loisir" style="font-size: 20px;">Par loisirs : </label>
                            <div class="loisir">
                                <input type="checkbox" name="loisirs[]" value="shopping" />
                                Faire du shopping<br />
                                <input type="checkbox" name="loisirs[]" value="sport" />
                                Faire du sport<br />
                                <input type="checkbox" name="loisirs[]" value="theatre" />
                                Aller au théatre<br />
                                <input type="checkbox" name="loisirs[]" value="cinema" />
                                Aller au cinéma<br />
                            </div>
                            <div class="loisir">

                                <input type="checkbox" name="loisirs[]" value="Jeux vidéo" />
                                Jouer aux jeux vidéo<br />
                                <input type="checkbox" name="loisirs[]" value="Chant" />
                                Chant<br />
                                <input type="checkbox" name="loisirs[]" value="Cuisine" />
                                Cuisiner<br />
                                <input type="checkbox" name="loisirs[]" value="Musée" />
                                Aller au musée<br />
                            </div>
                            <div class="loisir">

                                <input type="checkbox" name="loisirs[]" value="Jardinage" />
                                Faire du jardinage<br />
                                <input type="checkbox" name="loisirs[]" value="Bricolage" />
                                Bricoler<br />
                                <input type="checkbox" name="loisirs[]" value="Randonnées" />
                                Faire des randonnées<br />
                                <input type="checkbox" name="loisirs[]" value="Camping" />
                                Camping<br />
                            </div>
                            <div class="loisir">

                                <input type="checkbox" name="loisirs[]" value="Cocooning" />
                                Cocooning<br />
                                <input type="checkbox" name="loisirs[]" value="Voyage" />
                                Faire des voyages<br />
                                <input type="checkbox" name="loisirs[]" value="Yoga" />
                                Pratiquer le yoga<br />
                                <input type="checkbox" name="loisirs[]" value="Lecture" />
                                Lecture<br />
                            </div>
                        </div><br><br>
                        <button type="submit" id="search" name='search' class="button" value="result">Trouver</button>
                    </form>
                </div>

            </div>
        </div>
        
    </main>
    <footer>
    </footer>
</body>

</html>