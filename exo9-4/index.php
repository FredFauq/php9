<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Exercice 4 Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>PHP Exercice 4 Partie 9</h1>
        <div>
            <?php
            $strtotime = strtotime("2 August 2016"
                    . " 15:00"); // Définition de la variable  avec la fonction strtotime pour le timestamps du jours
            echo $strtotime;   // Affichage de la variable  
            ?>
        </div>
    </body>
</html>