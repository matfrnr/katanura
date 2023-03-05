<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../style/bootstrap-grid.css">
    <link rel="stylesheet" href="../style.css"><!-- voir si c'est comme sa l'incrustation du css -->
    <link rel="stylesheet" href="../includes/include.css">
    <meta charset="UTF-8">
    <title>Katana</title>
</head>
<body>
<header>

    <div class="row">
        <div class="col-3"><a href="../index.php"><img id="cote" src="../images/logo.png"
                                                       height="50" alt="logo"></a></div>
        <div class="col-6 center "><a id="titre" href="../index.php">Katanura</a></div>
        <nav class="menu col-3">
            <ul class="row">
                <li class="col-12"><a href="../connexion/connexion.php">Deconnexion</a></li>
            </ul>
        </nav>
    </div>

</header>
<?php
$file = "../datas/formulaire.csv";
//ouverture du fichier en lecture seul
$fichier = fopen($file, 'r');
// lecture des entêtes
$headers = fgetcsv($fichier);
$data = [];
// lecture du contenu
while ($ligne = fgetcsv($fichier)) {
    //conversion de la ligne (tableau) en tableau associatif par array_combine et ajout au tableau $data
    $data [] = array_combine($headers, $ligne);
}
fclose($fichier);
?>
<div class="vide"></div>
<div class="fond2">
    <header><h1> Information consommateur </h1></header>
    <p class="index"> Espace réservé au compte admninistrateur afin d'avoir accès au historique de toute les demandes
        des contact fait par nos clients
    </p>
</div>
<div class="row">
    <?php foreach ($data as $formulaire) { ?>
        <div class="col-4">
            <article class="formulaire">
                <p><strong>Nom : </strong><?php echo $formulaire['nom'] ?></p>
                <p><strong>Prénom : </strong><?php echo $formulaire['prenom'] ?></p>
                <p><strong>Email : </strong><?php echo $formulaire['email'] ?></p>
                <p><strong>Numéros de téléphone : </strong><?php echo $formulaire['telephone'] ?></p>
                <p><strong>Date de naissance : </strong><?php echo $formulaire['date'] ?></p>
                <p><strong>Ville de naissance : </strong><?php echo $formulaire['ville'] ?></p>
                <p><strong>Commune : </strong><?php echo $formulaire['commune'] ?></p>
                <p><strong>Adresse postale : </strong><?php echo $formulaire['adresse'] ?></p>
                <p><strong>Objet de contact : </strong><?php echo $formulaire['objet'] ?></p>
                <p><strong>Moyen de retour : </strong><?php echo $formulaire['retour'] ?></p>
                <p><strong>Comment vous nous avez découvert : </strong><?php echo $formulaire['decouvert'] ?></p>
                <p><strong>Civilité : </strong><?php echo $formulaire['civilite'] ?></p>
                <p><strong>Commentaire : </strong><?php echo $formulaire['commentaire'] ?></p>
            </article>
        </div>
    <?php } ?>
</div>
<footer>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/footer.inc.php";
    ?>
</footer>
</body>
</html>