<?php

#MES VARIABLES

$name = 'Loris';

$age = 21;
$weigth = 75;
$height = 182;
$bmc = $weigth / (($height / 100) * ($height / 100));

$number = 1;
$color = 'vert';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>TD 2 PHP</h1>
    <p><?= "Prénom : $name "?></p>
    <p><?= "Poids : ".($weigth * 1000).' grammes' ?></p>
    <p><?= "Taille : ".($height / 100).' mètres' ?></p>
    <p><?= "IMC : $bmc" ?></p>
    <p><?= $number?></p>
    <p><?= "Bonjour $name, comment vas-tu ? Tu as $age ans.<br> Ta couleur préférée est le <span>$color<span>."?></p>
</body>

</html>