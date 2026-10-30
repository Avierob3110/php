<?php 
$nota=11;
$notaFinal="test";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Ejercicio notas" ?></title>
</head>
<body>
    <?php 
    if ($nota < 0 || $nota > 10) {echo "-- ------------------------------- -- <br> -- Error nota fuera del rango -- <br> -- ------------------------------- --";}
    else{
    echo "Uso un if para decir si tu nota está aprobada o no <br>";
    
    echo "Tu nota es $nota entonces estás ";
    if ($nota < 5) { echo "Insuficiente";}
    elseif ($nota < 6) { echo "Suficiente";}
    elseif ($nota == 7) { echo "Bien";}
    elseif ($nota < 9) { echo "Notable";}
    else  { echo "Sobresaliente";}
    
    echo "<br> Ahora Uso match <br>";
    
    $notaFinal = match (true) {
        $nota < 0 || $nota > 10 =>  "Nota no válida" ,     
        $nota <= 5              =>  "Insuficiente" ,
        $nota <= 6              =>  "Suficiente" ,
        $nota <= 7              =>  "Bien" ,
        $nota <= 9              =>  "Notable" ,
        default                 =>  "Sobresaliente", 
    };
    echo "Tu nota es $nota entonces tienes un $notaFinal <br>";
    };
    ?>
</body>
</html>