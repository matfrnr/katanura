<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
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
        Nous vous remercions de votre confiance et vous souhaitons une bonne visite sur notre site.</p>
</div>
<?php
if (!empty($_GET) == true) {
    if (!empty($_GET)) {
        foreach ($_GET as $nom => $val) {
            if (is_array($val)) {
                foreach ($val as $val2) {
                    $id = $val2;
                }
            } else {
                $id = $val;
            }
        }
    }
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
    <?php foreach ($data as $katana) { ?>
        <?php if ($id == $katana['id']) {
            $fp = fopen('datas/panier.csv', 'a');
            fwrite($fp, $katana['image']);
            fwrite($fp, ",");
            fwrite($fp, $katana['titre']);
            fwrite($fp, ",");
            fwrite($fp, $katana['collection']);
            fwrite($fp, ",");
            fwrite($fp, $katana['prix']);
            fwrite($fp, ",");
            fwrite($fp, $katana['id']);
            fwrite($fp, ",");
        }
        ?>
    <?php } ?>
    <?php $stat = fstat($fp);
    ftruncate($fp, $stat['size'] - 1); // on enleve la virgule en trop
    fwrite($fp, "\n");
    fclose($fp);
    ?>
<?php } ?>
<?php
$filenamex = "./datas/panier.csv";
//ouverture du fichier en lecture seul
$fichierx = fopen($filenamex, 'r');
// lecture des entêtes
$headers = fgetcsv($fichierx);
$datax = [];
// lecture du contenu
while ($ligne = fgetcsv($fichierx)) {
    //conversion de la ligne (tableau) en tableau associatif par array_combine et ajout au tableau $data
    $datax [] = array_combine($headers, $ligne);
}
fclose($fichierx);
$prix = 0;

foreach ($datax

as $katana2){ ?>
<table>
    <thead>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </thead>
    <tbody>
    <tr>
        <td><img src="<?php echo $katana2['image'] ?>" width="200" height="200" alt="image"></td>
        <td class="titredupanier">
            <h3> <?php echo $katana2['titre']; ?></h3>
            <h4> Collection : <?php echo $katana2['collection']; ?></h4>
            <p></p>
        </td>
        <td class="prix"></td>
        <td class="trait">

        </td>
        <td><select name="quantité">
                <option value="1" selected>1</option>
            </select></td>
        <td><?php echo $katana2['prix'] . "€";
            $prix = $prix + $katana2['prix']; ?>
        </td>
    </tr>
    </tbody>
    <?php } ?>
    <tfoot>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td class="prix"></td>
        <td class="trait"></td>
        <td></td>
        <td><?php echo $prix . "€"; ?></td>
    </tr>
    </tfoot>
</table>

<footer>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/footer.inc.php";
    ?>
</footer>

</body>
</html>