<?php
$day = array(0 => '', 1 =>'Lundi',2 =>'Mardi',3 =>'Mercredi',4 =>'Jeudi',5 =>'Vendredi',6 =>'Samedi',7 =>'Dimanche');
$month = array(0 => '', 1 => 'Janvier',2 => 'Février',3 => 'Mars',4 => 'Avril',5 => 'Mai',6 => 'Juin',
7 => 'Juillet',8 => 'Août',9=> 'Septembre',10=> 'Octobre',11 => 'Novembre',12 => 'Décembre');
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
            <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.  
En fonction des choix, afficher un calendrier comme celui-ci : https://www.calendrier-imprimer.fr/calendrier/2021/calendrier-janvier-2021-modele-01.jpg </p>
        </div>
    </header>
    <main class="">
        <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
                <form methode="post" action="index.php">
                    <label for="month">Date</label>
                    <input type="month" name="month" />
                    <button type="submit">Envoyer!</button>
                </form>
                <?php

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