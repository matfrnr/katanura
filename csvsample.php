<?php
$filename = "./datas/ressources.csv";
//ouverture du fichier en lecture seul
$fichier = fopen($filename, 'r') or die("impossible d'ouvrir le fichier");
// lecture des entêtes
$headers = fgetcsv($fichier) or die ('fichier vide !');
$data = [];
// lecture du contenu
while ($ligne = fgetcsv($fichier)) {
    //conversion de la ligne (tableau) en tableau associatif par array_combine et ajout au tableau $data
    $data [] = array_combine($headers, $ligne);
}
fclose($fichier);
//affichage du fichier
foreach ($data as $datum) {
    echo "<div>";
    echo "<p>nom : {$datum['filename']}</p>";
    foreach ($datum as $key => $item) {
        //   echo "$key $item ";
    }
    echo "</div>";

}