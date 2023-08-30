<?php
$formatter = new IntlDateFormatter('fr_FR');
$formatter->setPattern('MMMM yyyy');
$days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$daysEn = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$month = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
$year = date("Y");
// recuperer les selects  si ils sont pas vide
if (isset($_GET['monthEl']) && !empty($_GET['monthEl'])) {
    $monthSelect = $_GET['monthEl'];
} else {
    $monthSelect = date('m');
}
if (isset($_GET['yearEl']) && !empty($_GET['yearEl'])) {
    $yearSelect = $_GET['yearEl'];
} else {
    $yearSelect = date('Y');
}
//recuperer le nombre jours
$numberDayMonth = cal_days_in_month(CAL_GREGORIAN, $monthSelect, $yearSelect);
// recuperer le 1er jour du mois
$firstDay = new DateTimeImmutable($yearSelect . '-' . $monthSelect . '-01');
$lastDay = new DateTimeImmutable($yearSelect . '-' . $monthSelect . '-' . $numberDayMonth);
// var_dump($firstDay->format('l'));
$fDay = $firstDay->format('l');
$firstDayIndex = array_search($fDay, $daysEn);
$lDay = $lastDay->format('l');
$lastDayIndex = array_search($lDay, $daysEn);
$monthActive = ucwords($formatter->format(new DateTimeImmutable("$yearSelect-$monthSelect")));
$dayNow = new DateTimeImmutable();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 9</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 9</h1>
            <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième
                permet d'avoir l'année.
                En fonction des choix, afficher un calendrier comme celui-ci :
                https://www.calendrier-imprimer.fr/calendrier/2021/calendrier-janvier-2021-modele-01.jpg </p>
        </div>
    </header>
    <main class="">
        <div class="row">
            <div class="results  ">
                <form methode="get" action="index.php">
                    <label for="year">Selectionne une année !</label>
                    <select class="form-select my-2" aria-label="Default select example" name="yearEl">
                        <option disabled selected>Selectionne une année !</option>
                        <?php for ($year = 1923; $year <= 2100; $year++) { ?>
                            <option value="<?= $year ?>"><?= $year ?></option>
                        <?php } ?>
                    </select>
                    <label for="month">Selectionne un mois !</label>
                    <select class="form-select my-2" aria-label="Default select example" name="monthEl">
                        <option disabled selected>Selectionne un mois !</option>
                        <?php foreach ($month as $key => $value) { ?>
                            <option value="<?= $key + 1 ?>"><?= $value ?></option>
                        <?php } ?>
                    </select>
                    <button class="my-2" type="submit">Envoyer!</button>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            
            <h1 class="monthNow" >
                <button type= "button"></button>
                <?= $monthActive ?>
                <button type= "button"></button>
            </h1>
            
            <table class="table table-success table-bordered  ">
                <thead>
                    <?php
                    foreach ($days as $key => $value) {
                        ?>
                        <th>
                            <?= $value ?>
                        </th>
                    <?php } ?>
                </thead>
                <tbody>
                    <?php $j = 1;
                    for ($i = 0; $i < $numberDayMonth + $firstDayIndex + (6-$lastDayIndex); $i++) { ?>
                        <?php if ($i == 0) { ?>
                            <tr>
                            <?php } elseif ($i % 7 == 0) { ?>
                            </tr>
                            <tr>
                            <?php } ?>
                            <?php if ($i < $firstDayIndex || $j > $numberDayMonth ) { ?>
                                <td></td>
                            <?php } else { ?>
                                <td class="<?= ($j==$dayNow->format('d') && $dayNow->format('Y-m')==$firstDay->format('Y-m')) ? 'red': '' ?>">
                                    <?= $j ?>
                                </td>
                                <?php $j++;
                            } ?>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>