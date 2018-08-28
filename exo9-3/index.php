<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Exercice 3 Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>PHP Exercice 3 Partie 9</h1>
        <div>
            <?php
             setlocale(LC_TIME, 'fr_FR.UTF8'); // pour afficher la date en français. 
             echo strftime('%A %d %B %Y'); // pour afficher la date 
            ?>
        </div>
    </body>
</html>