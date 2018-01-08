<?php
//Tableau associatif contenant la liste des mois de l'année avec le numéro correspondant
$months = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre');
/*Vérification de la sélection du mois et de l'année
 * Si le mois et l'année sont bien sélectionnés on les attribue à $month et $year
 *  */
if (isset($_POST['month']) && isset($_POST['year'])) {
    $month = $_POST['month'];
    $year = $_POST['year'];
} else {
    //Sinon on attribue à $month et $year le mois et l'année en cours
    $month = date('n');
    $year = date('Y');
}
//Récupération du nombre de jours dans le mois grâce à la fonction date qui prend en paramètre un format et un timestamp que l'on crée
$numberDaysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
//Récupération du premier jour de la semaine du mois grâce à la fonction date qui prend en paramètre un format et un timestamp que l'on crée
$firstWeekDayOfMonth = date('N', mktime(0, 0, 0, $month, 1, $year));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Calendrier</title>
    </head>
    <body>
        <form method="POST" action="">
            <select name="month">
                <?php
                //On parcourt $months afin de créer les options
                foreach ($months as $monthNumber => $monthName) {
                    //Si notre mois sélectionné est égal au mois créé par l'option on lui affecte l'attribut "selected"
                    ?>
                    <option value="<?= $monthNumber ?>" <?= $month == $monthNumber ? 'selected' : '' ?>>
                       <?= $monthName ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <select name="year">
                <?php
                //On crée une boucle qui va permettre de générer une liste d'années
                for ($yearsList = 1900; $yearsList <= 2100; $yearsList ++) {
                    //Si notre année sélectionnée est égale à l'année créée par l'option on lui affecte l'attribut "selected"
                    ?>
                    <option value="<?= $yearsList ?>" <?= $year == $yearsList ? 'selected' : '' ?>><?= $yearsList ?></option><?php
                }
                ?>
            </select>
            <input type="submit" name="send" value="Valider" />
        </form>
        <table border="1">
            <thead>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
        </thead>
        <tbody>
            <tr>
                <?php
                //$currentDay correspond au numéro du jour en cours
                $currentDay = 1;
                /*$daysTiles correspond au nombre de cases nécessaires du calendrier
                 * On ajoute à $numberDaysInMonth la variable $firstWeekDayOfMonth 
                 * On soustrait 1 au résultat afin d'obtenir le bon nombre de cases
                 */
                for ($daysTiles = 1; $daysTiles <= $numberDaysInMonth + $firstWeekDayOfMonth - 1; $daysTiles ++) {
                    //$firstWeekDayOfMonth est inférieure ou égale au nombre de cases. Quand on arrive au jour de la semaine du premier jour du mois, on commence à écrire le numéro des jours
                    if ($firstWeekDayOfMonth <= $daysTiles) {
                        ?><td><?= $currentDay ?></td><?php
                        $currentDay ++;
                    } else {
                        //On crée des cases vides pour éviter un décalage vers la gauche
                        ?><td></td><?php
                    }
                    //Si le nombre de cases est un multiple de 7 on passe une ligne car c'est la fin d'une semaine
                    if ($daysTiles % 7 == 0) {
                        ?></tr><tr><?php
                    }
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>