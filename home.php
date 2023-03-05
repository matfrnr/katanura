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

<?php
$filename = "../datas/connexion.csv";
//ouverture du fichier en lecture seul
$fichier = fopen($filename, 'r');
// lecture des entêtes
$headers = fgetcsv($fichier);
$users = [];
// lecture du contenu
while ($ligne = fgetcsv($fichier)) {
    //conversion de la ligne (tableau) en tableau associatif par array_combine et ajout au tableau $data
    $users [] = array_combine($headers, $ligne);
}


if (isset($_GET['login']) && isset($_GET['mdp'])) {

    foreach ($users as $user) {
        if (
            $user['login'] === $_GET['login'] &&
            $user['mdp'] === $_GET['mdp']
        ) {
            echo "SUCCES CONNEXION ! Veuillez patienter vous allez etre rediriger vers le site";
            header('Refresh:3;url= admin.php');
            exit;
        } else {
            echo "erreur";
            header('Refresh:2;url= connexion.php');
            exit;
        }
    }
}


fclose($fichier);
?>


</body>
</html>