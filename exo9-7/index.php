<?php
// déclaration de la variable avec la date du jour
$date = date_create('now');  
// + 20 jrs 
date_modify($date, '+20 day');   
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Exercice 7 Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>PHP Exercice 7 Partie 9</h1>
        <div>
            <?php
            // affiche la date + 20 jrs 
            echo date_format($date, 'd-m-Y');   
            ?>
        </div>
    </body>
</html>