<?php
$anio=2026;
$anioR="test";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Año bisiesto" ?></title>
</head>
<body>
    
<?php
echo "Usando el if para comprobar si es bisiesto o no <br>";

if ($anio < 0 ) {echo "Año menor que 0, pon un año mayor";}
elseif ($anio % 400 == 0) {echo "1 - el año $anio es bisiesto";}
elseif ($anio % 100 == 0) {echo "2 - el año $anio no es bisiesto";}
elseif ($anio % 4 == 0) {echo "3 - el año $anio es bisiesto";}
else {echo "el año $anio no es bisiesto";}

echo "<br> Usando el match(true) para comprobar si es o no bisiesto <br>";
$anioR = match(true){
    $anio % 400 == 0    => "bisiesto",
    $anio % 100 == 0    => "No bisiesto",
    $anio % 4 == 0      => "bisiesto",
    default             => "No bisiesto",
};
echo " El año $anio es $anioR";
/* El año 1900 no es bisiesto porque aunque sea divisible entre 400 no es dividible por 100

Todo es imprescindible son 3 parentesis donde comprueban cada opcion, no hay una que sea desechable
*/
?>
</body>
</html>