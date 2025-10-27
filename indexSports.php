<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sports </title>
</head>
<body>
    <?php
    include "./sports/Sport.php";
    include "./sports/Rugby.php";
    //Contruyo un objeto de la clase Sport: 
    //$s1 = new Sport("Equipo", true, 5); //No se puede porque sport es abstracta

    //Objeto Rugby: 
    $r1 = new Rugby("Los pumas", "Equipo", true, 15);
    $r1 -> addPlayers(6);
    echo "<p> $r1 </p>";

    ?> 
    
</body>
</html>