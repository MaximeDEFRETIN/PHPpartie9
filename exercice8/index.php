<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 8</title>
    </head>
    <body>
        <?php
        /*Fonctionne aussi
        echo 'La date du jour - 22 jours est : ' . date('d/m/Y', strtotime('-22 days'));
         */
        //On crée une date, auquel on ajoute une valeur
        $dateToday = new DateTime();
        $dateToday->sub(new DateInterval('P22D'));
        //On affiche le résultat
        echo $dateToday->format('d/m/Y');
        ?>
</html>