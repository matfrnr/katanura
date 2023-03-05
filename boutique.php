<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style/bootstrap-grid.css">
    <link rel="stylesheet" href="style.css"><!-- voir si c'est comme sa l'incrustation du css -->
    <link rel="stylesheet" href="includes/include.css">
    <meta charset="UTF-8">
    <title>Boutique</title>
</head>
<body>
<header>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/header.inc.php";
    ?>
</header>

<div class="fond1"></div>
<?php
$filename = "./datas/ressources.csv";
//ouverture du fichier en lecture seul
$fichier = fopen($filename, 'r');
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
<div class="fond2">
    <header><h1> Nos article</h1></header>
    <p class="index"> Tous les katanas que nous vous proposons sont d'une grande qualité, fait en bois, acier et carbone
        nos katanas sont robustes et représentent parfaitement l'univers d'où ils sont tirés. Nous vous proposons des
        katanas venant de différents mangas/animés
        afin que vos puissez posséder le katana de votre personnage favoris.
    </p>
</div>

<div class="row aggrandissement">
    <?php foreach ($data as $katana) { ?>
        <div class="col-4">
            <a>
                <article class="boutique product">
                    <div class="row">
                        <div class="col-5"><img class="product-img" src="<?php echo $katana['image'] ?>" width="230"
                                                height="245" alt="image"></div>
                        <div class="col-7">
                            <h2 class="product-name"><?php echo $katana['titre'] ?> </h2>
                            <h3 class="product-tag"> Collection : <?php echo $katana['collection'] ?></h3>
                            <p class="product-id"> <?php echo $katana['description'] ?></p>
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="product-price"><strong>Prix :</strong> <?php echo $katana['prix'] . "€" ?></h4>
                                </div>
                                <div class="col-6">
                                    <form method=get action="panier.php">
                                        <button id="panier" name="paer"
                                                value=<?php echo $katana['id'] ?> class="butonPanier">Ajouter au panier
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </a>
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