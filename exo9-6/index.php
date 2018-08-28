<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Exercice 6 Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>PHP Exercice 6 Partie 9</h1>
        <div>
            <?php
            // la fonction cal_days_in_month permet de retourner le nbre de jours. 
            $days = cal_days_in_month(CAL_GREGORIAN, 2, 2016); 
            // on affiche le résultat. 
            echo "il y'a {$days} jours en fevrier 2016"; 
            ?>
        </div>
    </body>
</html>