<?php
   $color = "#FFFF00";
   if (isset($_GET['color'])) {
      $color = $_GET['color'];
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
<body style="background-color:<?=$color?>;">

    <a href="./index.php">home</a>
    <a href="./treciasUzd.php">i save pati</a>
    <form action="" method="get">
        <input type="text" name="color">
        <button type="submit">press</button>
        
    </form>
    
</body>
</html>


<!-- 3) Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->
