<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Emepleade </title>
</head>
<body>
    <?php
        echo "<h1><u> Ejercicio 1 </u></h1>";
        include $_SERVER['DOCUMENT_ROOT'] . "/Ejercicios de clase/Empleade.php";

        
        $empleade = new Empleade("Pablito", "Sanchez Palacio", 20000);

        echo "<b> Datos de Empleade </b>";
        echo "<br>";
        echo $empleade -> __tostring();
        echo "<hr>";

        echo "<b> Nombre completo de Empleade </b>";
        echo "<br>";
        echo $empleade -> getNombreCompleto();
        echo "<hr>";

        echo "<b> IRPF a pagar </b>";
        echo "<br>";
        echo "El IRPF que debe pagar es: " . $empleade -> pagarImpuestos() . " €";

        echo "<h1><u> Ejercicio 2 </u></h1>";
        
        

    ?> 
</body>
</html>