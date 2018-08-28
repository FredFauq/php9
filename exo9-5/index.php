<?php
 // Initialisation de l'objet date time en créant la variable $date.
            $date = new DateTime('2016-05-16');  
            // Initialisation de l'objet date time avec la date du jour.
            $today = new DateTime('now'); 
            // Méthode de date time qui fait la différence entre les 2 dates.
            $result = $date->diff($today);  
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Exercice 5 Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>PHP Exercice 5 Partie 9</h1>
        <div>
            <?php
            // Affichage du résultat. 
            echo $result->format('%R%a jours');  // (;) pas obligatoire comme il n'y a qu'une instruction  
            ?>
        </div>
    </body>
</html>