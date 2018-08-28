<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>TP</title>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>

        <form method="post" action="index.php" >
            <?php
            // déclaration de la variable pour les années 
            $years = '';
            // Parcours du tableau, la boucle for permet de passer d'années en années. 
            ?>
            <p>
                <select name="years">
                    <?php
                    for ($y = 1950; $y <= 2018; $y++) {
                        // Est-ce l'année courante ?
                        if ($y == date('Y')) {
                            $years = ' selected';
                        }
                        // Affichage de la ligne <?= remplace le echo
                        ?><option value='<?= $y ?>' <?= $years ?>><?= $y ?></option>
                        <?php
                        // Remise à zéro de $years
                        $years = '';
                    }
                    ?>
                </select>
                <!-- Bouton Submit de validation du formulaire pour l'envoi des données -->
                <input type="submit" value="valider">
            </p>
            <p>
                <!-- formulaire pour les mois,-->
                <select name="months">
                    <?php
                    //on déclare la variable du tableau des mois 
                    $months = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
                    // boucle foreach pour passer de mois en mois
                    foreach ($months as $key => $month) {
                        ?>
                        <option value ='<?= ($key + 1) ?>'><?= $month ?></option>
                        <?php
                    }
                    ?> 
                </select>
                <input type="submit" value="Valider" />
            </p>
        </form>
        <?php
        // isset sert a vérifier si les champs existent. 
        if (isset($_POST['years']) && isset($_POST['months'])) {
            ?>
            <!--affiche la date du jrs-->          
            <p><?php
                setlocale(LC_TIME, 'fr_FR.UTF8');
                echo strftime('%A %d %B %Y');
                ?>
            </p>
            <!-- Affiche le mois et l'année que l'on vérifie sur la liste déroulante -->
            <p><?php echo $months[$_POST['months'] - 1] . ' ' . $_POST['years']; ?></p>
            <?php
            // pour récuperer la position du premier jour de la semaine où commence le mois
            $dayOfWeek = strftime("%u", strtotime($_POST['months'] . '/' . 1 . '/' . $_POST['years']));
            // Retourne le nombre de jours dans un mois, pour une année et un calendrier donné
            $dayOfMonth = cal_days_in_month(CAL_GREGORIAN, $_POST['months'], $_POST['years']);
            // pour récuperer la position du premier jour de la semaine où commence le mois
            $lastDay = strftime("%u", strtotime($_POST['months'] . '/' . $dayOfMonth . '/' . $_POST['years']));
            $differenceDay = 7 - $lastDay;
        }
        ?>
        <!-- tableau pour afficher le calendrier -->
        <div id="calendar">
            <table>
                <thead>
                    <tr>
                        <th>lundi</th>
                        <th>mardi</th>
                        <th>mercredi</th>
                        <th>jeudi</th>
                        <th>vendredi</th>
                        <th>samedi</th>
                        <th>dimanche</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        // boucle pour incrémenter case par case, 
                        for ($calendar = 1; $calendar < $dayOfMonth + $dayOfWeek; $calendar++) {
                            //  si la date du jours et plus grande que la date du calendrier, on met une case vide. 
                            if ($calendar < $dayOfWeek) {
                                ?>
                                <td></td>
                                <?php
                            } else {
                                ?>
                                <td><?= ($calendar - $dayOfWeek + 1) ?></td>
                                <?php
                            }
                            // si on est a la fin de la semaine , on repasse a la ligne en dessous 
                            if ($calendar % 7 == 0) {
                                ?>
                            </tr><tr>
                                <?php
                            }
                        }
                        for ($a = 1; $a <= $differenceDay; $a++) {
                            ?>
                            <td></td>
                            <?php
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div> 
    </body>
</html>
