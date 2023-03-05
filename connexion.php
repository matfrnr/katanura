<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style/bootstrap-grid.css">
    <link rel="stylesheet" href="../includes/include.css">

</head>
<body>
<header>
    <div class="row">
        <div class="col-3"><a href="../index.php"><img id="cote" src="../images/logo.png"
                                                       height="50" alt="logo"></a></div>
        <div class="col-6 center "><a id="titre" href="../index.php">Katanura</a></div>
        <nav class="menu col-3">
            <ul class="row">
                <li class="col-3"><a href="../boutique.php" class="boutiqueTrait">Boutique</a></li>
                <li class="col-3 px-3"><a href="../contact.php" class="contactTrait">Contact</a></li>
                <li class="col-3 px-1"><a href="../connexion/connexion.php" class="connexionTrait">Connexion</a></li>
                <li class="col-3"><a href="../panier.php"><img src="../images/panier.png" class="panier" width="27"
                                                            height="25" alt="panier"></a></li>
            </ul>

        </nav>
    </div>
</header>


<main>

    <!-- Titre de la page-->


    <form method="get" action="home.php" class="row">


        <fieldset id="connexionFieldset">

            <legend>Se connecter</legend>


            <div class="col-6" id="login_">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" required>
            </div>


            <div class="col-6">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" required>
            </div>

            <div id="butonConnexion">
                <input type="reset" value="Annuler" id="butonAnnuler">
                <input type="submit" value="Envoyer" id="butonEnvoyer">
            </div>

        </fieldset>

    </form>
</main>
<footer>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/footer.inc.php";
    ?>
</footer>
</body>
</html>