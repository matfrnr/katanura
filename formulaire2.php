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
<div class="fond1"></div>
<div class="fond2">
    <header><h1> Notre boutique</h1></header>
    <p> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
        Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme
        assembla ensemble des
        morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq
        siècles, mais s'est aussi adapté
        à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960
        grâce à la vente de feuilles
        Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de
        mise en page de texte, comme
        Aldus PageMaker.</p>
</div>
<br>
<br>
<h1 class="centre"> Vos réponse nous on était envoyé </h1>
<div class="get">
    <?php
    $fp = fopen('datas/formulaire.csv', 'a');
    if (!empty($_GET)) {
        foreach ($_GET as $nom => $val) {
            if (is_array($val)) {
                foreach ($val as $val2) {
                    fwrite($fp, $val2);
                    fwrite($fp, ",");
                }
                echo "</ul></li>";
            } else {
                fwrite($fp, $val);
                fwrite($fp, ",");
            }
        }
        echo "</ul>";
    }

    $stat = fstat($fp);
    ftruncate($fp, $stat['size'] - 1); // on enleve la virgule en trop
    fwrite($fp, "\n");
    fclose($fp);
    ?>
</div>
<footer>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/" . "includes/footer.inc.php";
    ?>
</footer>
</body>
</html>

