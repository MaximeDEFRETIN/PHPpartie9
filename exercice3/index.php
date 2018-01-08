<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <!--On affiche le jour, le mois et l'année, en français-->
        <?php
        setlocale(LC_TIME, 'fr_FR.UTF8');
        echo strftime("%A %e %B %Y");
        ?>
</html>