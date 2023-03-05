<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/bootstrap-grid.css">
    <link rel="stylesheet" href="includes/include.css">
</head>

<body>

<header>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/header.inc.php";
    ?>
</header>

<div class="fond4"></div>
<div class="fond2">
    <header><h1> Notre boutique</h1></header>
    <p> Notre boutique situé en plein coeur de Paris vous accueille du lundi au samedi. Venez découvrir une collection
        extraordinaire
        de katana provenant d'animés. Commandez sur notre site et recevez votre katana dans les 3 jours ouvrés.
        Nous vous remercions de votre confiance et vous souhaitons une bonne visite sur notre site.
    </p>
</div>

<main class="formulaireContact">

    <!-- Titre de la page-->
    <header>
        <h2 class="titreContact">Nous contacter</h2>
        <!-- Créer une border-bottom-->
        <p class="surlignementTitre"></p>
    </header>

    <!-- Bootstrap-->
    <div class="container-fluid fieldset">

        <form method="get" action="formulaire2.php" class="row">

            <!-- Section gauche du formulaire-->
            <div class="col-5 sectionGauche">

                <fieldset>
                    <!-- Titre section formulaire-->
                    <legend>Vos informations</legend>

                    <!--Ligne 1 -->
                    <div class="row">
                        <!--Colonne 1-->
                        <div class="col-6">
                            <label for="nom">Nom <span class="red"> *</span></label>
                            <input type="text" name="nom" id="nom" required>
                        </div>

                        <!--Colonne 2-->
                        <div class="col-6">
                            <label for="prenom">Prénom <span class="red"> *</span></label>
                            <input type="text" name="prenom" id="prenom" required>
                        </div>
                    </div>

                    <!--Ligne 2-->
                    <div class="row">
                        <!--Colonne 1 -->
                        <div class="col-6">
                            <label for="mail">Email <span class="red"> *</span></label>
                            <input type="email" name="email" id="mail" required>
                        </div>

                        <!--Colonne 2-->
                        <div class="col-6">
                            <label for="telephone">Telephone <span class="red"> *</span></label>
                            <input type="tel" name="telephone" id="telephone" required>
                        </div>
                    </div>

                    <!--Ligne 3-->
                    <div class="row">
                        <!--Colonne 1-->
                        <div class="col-6">
                            <label for="naissance">Date de naissance <span class="red"> *</span> </label>
                            <input type="date" name="date_naissance" id="naissance" required>
                        </div>

                        <!--Colonne 2-->
                        <div class="col-6">
                            <label for="ville">Ville de naissance</label>
                            <input type="text" name="ville_naissance" id="ville">
                        </div>
                    </div>

                    <!--Ligne 4-->
                    <div class="row">

                        <!--Colonne 1-->
                        <div class="col-6">
                            <label for="adress">Adresse</label>
                            <input type="text" name="adresse" id="adress">
                        </div>

                        <!--Colonne 2-->
                        <div class="col-6">
                            <label for="commune">Commune <span class="red"> *</span></label>
                            <input type="text" name="commune" id="commune" required>
                        </div>
                    </div>

                </fieldset>
            </div>

            <!--Section droite du formulaire-->
            <div class="col-5 sectionDroite">

                <fieldset>
                    <!--Titre section du formulaire-->
                    <legend>Votre message</legend>

                    <!--Ligne 1-->
                    <div class="row">

                        <!--Colonne 1-->
                        <div class="col-6">
                            <label for="obj">Objet<span class="red"> *</span></label>
                            <select name="objet_demande" id="obj">
                                <option value="obtenir_article">Je souhaite obtenir un article</option>
                                <option value="retourner_article" selected>Je souhaite retourner un article</option>
                                <option value="obtenir_aide">Je souhaite obtenir de l'aide</option>
                            </select>
                        </div>

                        <!--Colonne 2-->
                        <div class="col-6 obtenirReponse">
                            <label for="reponse">Obtenir la réponse <span class="red"> *</span></label>
                            <select name="obtenir_reponse" id="reponse">
                                <option value="sms">Recevoir un SMS</option>
                                <option value="mail" selected>Recevoir un mail</option>
                                <option value="courrier">Recevoir un courrier</option>
                            </select>
                        </div>
                    </div>

                    <!--Ligne 2 -->
                    <div class="row">

                        <!--Colonne 1-->
                        <div class="col-6">
                            Comment nous avez-vous découvert ?
                            <br>
                            <input type="checkbox" name="decouverte[]" id="reseaux" value="reseaux">
                            <label for="reseaux">Réseaux sociaux</label>
                            <br>
                            <input type="checkbox" name="decouverte[]" id="famille" value="famille">
                            <label for="famille">La famille</label>
                            <br>
                            <input type="checkbox" name="decouverte[]" id="site" value="site">
                            <label for="site">Site internet</label>
                        </div>

                        <!--Colonne 2-->
                        <div class="col-6">
                            Civilité <span class="red"> *</span>
                            <br>
                            <input type="radio" name="civilite" value="Mme" id="civilite_mme" checked>
                            <label for="civilite_mme">Madame</label>
                            <br>
                            <input type="radio" name="civilite" value="Mr" id="civilite_mr">
                            <label for="civilite_mr">Monsieur</label>
                            <br>
                            <input type="radio" name="civilite" value="non_binaire" id="civilite_autre">
                            <label for="civilite_autre">Non-Binaire</label>
                        </div>
                    </div>

                    <!--Zone de texte-->
                    <div class="textarea">
                        <label for="remarque">Remarques complémentaires</label>
                        <textarea id="remarque" name="remarque" rows="10"
                                  placeholder="Je vous écris concernant..."></textarea>
                    </div>

                </fieldset>
            </div>

            <!--Checkbox-->
            <div class="conditionsUtilisation">
                <input type="checkbox" id="conditions" required>
                <label for="conditions">J'accepte les conditions d'utilisations<span class="red"> *</span></label>
            </div>

            <!--Bouton bas  du formulaire-->
            <div class="butonForm">
                <input type="reset" value="Annuler" class="redButon">
                <input type="submit" value="Envoyer" class="greenButon">
            </div>

        </form>
    </div>
</main>
<footer>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/footer.inc.php";
    ?>
</footer>
</body>
</html>