<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        //Les variables qui suivent seraont en français
        setlocale(LC_TIME, 'fr_FR.UTF8');

        //On crée une 1er date avec un timestamp
        $date1 = date_create();
        date_timestamp_set($date1, 1480550400);

        //On crée une 2ème date avec un timestamp
        $date2 = new DateTime();
        $date2 -> setTimestamp(1483142400);
        
        //On compare les 2 dates
        $interval = $date1 -> diff($date2);

        //On affiche le résultat
        echo 'Au mois de mai, il y a ' . $interval -> format('%a') . ' jours.';
        ?>
</html>