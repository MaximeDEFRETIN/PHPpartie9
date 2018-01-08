<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        //On crée une date, auquel on ajoute une valeur
        $dateToday = new DateTime();
        $dateToday->add(new DateInterval('P20D'));
        //On affiche le résultat
        echo $dateToday->format('d/m/Y');
        ?>
    </body>
</html>