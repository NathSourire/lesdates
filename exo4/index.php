<?php
date_default_timezone_set("Europe/Paris");
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
$formatter->setPattern('eeee d MMMM yyyy HH:mm');
$dateFr = $formatter->format($date);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 4</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 4</h1>
            <p>Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
        </div>
    </header>
    <main class="">
        <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
                <?php
                    echo $formatter->format(new DateTime()).'<br>';
                    echo 'Timestamp Aujourd\'hui : '. time().'<br>';
                    echo 'Timestamp mardi 2 août 2016 à 15h00 : '. strtotime('2016/02/08 15:00:00 ').'<br>';
                    echo 'Ou Timestamp mardi 2 août 2016 à 15h00 : '. mktime(15,0,0,2,8,2016).'<br>';
                    echo 'test'.ucwords($dateFr);
                ?>
            </div>
        </div>
    </main>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>