<?php
if (isset($_POST['month']) && isset($_POST['year'])) {
    $numberDaysInMonth = date('t', mktime(0, 0, 0, $_POST['month'], 1, $_POST['year']));
    $firstWeekDayOfMonth = date('N', mktime(0, 0, 0, $_POST['month'], 1, $_POST['year']));
}
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
                <option value="1">Janvier</option>
                <option value="2">Février</option>
                <option value="3">Mars</option>
                <option value="4">Avril</option>
                <option value="5">Mai</option>
                <option value="6">Juin</option>
                <option value="7">Juillet</option>
                <option value="8">Août</option>
                <option value="9">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Décembre</option>
            </select>
            <select name="year">
                <?php
                for ($year = 1900; $year <= 2100; $year ++) {
                    ?>
                    <option value="<?= $year ?>"><?= $year ?></option><?php
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
                $currentDay = 1;
                for ($daysTiles = 1; $daysTiles <= $numberDaysInMonth; $daysTiles ++) {
                    if ($firstWeekDayOfMonth <= $daysTiles) {
                        ?><td><?= $currentDay ?></td><?php
                        $currentDay ++;
                    }
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