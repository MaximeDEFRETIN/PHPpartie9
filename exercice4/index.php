<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Exercice 4/title>
  </head>
  <body>
    <?php
    // Retourne le timestamp UNIX actuel
    echo time();
    ?>
    <br/><br/>
    <?php
    // Retourne le timestamp UNIX d'une date (heure, minute, second, mois, jour, année)
    echo mktime(15, 0, 0, 8, 2, 2016);
    ?>
    <a href="../index.php">Retour</a>
  </body>
</html>