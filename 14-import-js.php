<?php

// Importation du contenu d'un fichier externe au format json
$takeMeteo = file_get_contents("https://prevision-meteo.ch/services/json/bruxelles-1",);

// Transformation du format json en tableau associatif (,true)
$jsonToAssocMeteo = json_decode($takeMeteo,true);

 // var_dump($jsonToAssocMeteo);

foreach ($associativeArray as $valeur2) {
    echo "<p>$</p>";
}
echo "<hr>";
// récupère les clefs et les valeurs
foreach ($associativeArray as $clef => $valeur2) {
    echo "<p>$clef -> $valeur2</p>";

if(isset($_GET['jsonMeteo'])){
    


    switch($_GET['jsonMeteo']){
        case 1 : 
            $title = $pages[1]["titre"];
            $texte = $pages[1]["texte"];
            break;
        case 2: 
            $title = $pages[2]["titre"];
            $texte = $pages[2]["texte"];
            break;
        case 3: 
            $title = $pages[3]["titre"];
            $texte = $pages[3]["texte"];
            break;
        default : 
            $title = "Erreur 404";
            $texte = "Touche pas mon URL !!!";
    }

 
}else{
    $title = $pages[1]["titre"];
    $texte = $pages[1]["texte"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo</title>
</head>
<body>
    <h1>Météo à Bruxelles</h1>
    <h3>Exercice</h3>
    <p>Utilisez un foreach pour lister tout le tableau</p>
    <p>Utilisez un switch si les clefs sont "fcst_day_0" jusqu'à "fcst_day_4"</p>
    <p>affichez la "date", le "tmin" et "tmax"</p>
    <p>Exemple le 07.09.2021 il fera entre 16° et 31°</p>
    <h3>Affichage du résultat</h3>
    <?php
    // tant qu'on a des éléments du tableau $jsonToAssocMeteo (! au premier level)
    foreach($jsonToAssocMeteo as $clef => $valeur){
        
        // on va vérifier le nom de chaque clef du tableau
        switch($clef){
            case "fcst_day_0" : 
                echo "<p>Le ".$valeur['date']." il fera entre ".$valeur['tmin']."° et ".$valeur['tmax']."°</p>";
                break;
            case "fcst_day_1" : 
                echo "<p>Le $valeur[date] il fera entre $valeur[tmin]° et $valeur[tmax]°</p>";
                break;
            case "fcst_day_2" : 
                echo "<p>Le $valeur[date] il fera entre $valeur[tmin]° et $valeur[tmax]°</p>";
                break;
            case "fcst_day_3" : 
                echo "<p>Le $valeur[date] il fera entre $valeur[tmin]° et $valeur[tmax]°</p>";
                break;
            case "fcst_day_4" : 
                echo "<p>Le $valeur[date] il fera entre $valeur[tmin]° et $valeur[tmax]°</p>";
            }
      }
    ?>
    
</body>
</html>