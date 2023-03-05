<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style/bootstrap-grid.css">
    <link rel="stylesheet" href="style.css"><!-- voir si c'est comme sa l'incrustation du css -->
    <link rel="stylesheet" href="includes/include.css">
    <meta charset="UTF-8">
    <title>Katana</title>
</head>
<body>
<header>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/header.inc.php";
    ?>
</header>
<main class="deroulant">
    <div class="slider-1">
        <div class="slider">
            <img src="../images/image3.jpg" alt="image">
            <img src="../images/image4.jpg" alt="image">
            <img src="../images/image1.jpg" alt="image">
            <img src="../images/image2.jpg" alt="image">
            <img src="../images/image3.jpg" alt="image">
        </div>
    </div>
</main>
<div class="fond2">
    <header><h1> Notre boutique</h1></header>
    <p class="index"> Venez découvrir une collection extraordinaire
        de katana provenant d'animés. Commandez en tout confiance et sécurité sur notre site et recevez votre commande
        dans les 3 jours ouvrés dans toute la France.
        Nous vous remercions de votre confiance et vous souhaitons une bonne visite sur notre site.</p>
</div>
<div class="row">
    <div class="col-4"></div>
    <div class="col-6">
        <article>
            <header><h1> Nos Katana </h1></header>
            <p class="index"> Notre boutique vous propose des dizaines de katana sortant tout droit, des univers de vos
                mangas/animés préférés. En passant par les plus célèbres licences comme One pièce ou bleach jusqu'aux
                licences moins connu mais que vous adorer comme Akame Ga Kill.
                Notre boutique vous propose des répliques de ce célèbre katana comme outils de collection ou
                décoration</p>
        </article>
    </div>
    <div class="col-2">
        <img src="images/fond2.png" height="300" alt="imageFond">
    </div>
    <br>
    <div class="col-6">
        <article>
            <header><h1> Des réplique de katana </h1></header>
            <p class="index"> Nous vous proposont des articles de collection ou de décoration, tous nos katana ne sont
                pas fait pour être utilisé dans des sports de combat ou autres. Mais beacoup de nos
                katana peuvent être affuté afin d'être tranchant. Leur utilisation doit rester dans un contexte de
                décoration ou de collection nous ne nous portons point garant de leurs utilisations.
            </p>
        </article>
    </div>
    <div class="col-2">
        <img src="images/fond3.png" width="280" alt="imageFond">
    </div>
    <div class="col-4"></div>
</div>
<footer>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/footer.inc.php";
    ?>
</footer>
</body>
</html>