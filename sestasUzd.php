<?php
if ($_SERVER['REQUEST_METHOD']== "GET"){
    $color = "green";
}else{
    header("Location:./sestasUzd.php");
    die;
    $color = "yellow";
}    

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

    <form location="" method="get">
        <button type="submit">get</button>
    </form>
    <form action="" method="post">

    <button type="submit">post</button>

    </form>
    
</body>
</html>

<!-- 6)Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST -->