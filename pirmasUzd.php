<?php
   $color = "black";
   if (isset($_GET['color'])) {
   $color = "red";
   }
   print_r($_GET);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?= $color?>;">

    <a href="./index.php">home</a>
    <a href="./pirmasUzd.php">pirma nuoroda</a>
    <a href="./pirmasUzd.php?color=1">antra nuoroda</a>
    
</body>
</html>

<!-- 7. WEB mechanika (background edition)

1) Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->
