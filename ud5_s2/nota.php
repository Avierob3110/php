<?php 
$nota=0;

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
    if ($nota < 0 || $nota > 10) {echo "Nota no válida";}
    elseif ($nota > 10) { echo "Nota no válida";}
    elseif ($nota < 5) { echo "Insuficiente";}
    elseif ($nota < 6) { echo "Suficiente";}
    elseif ($nota == 7) { echo "Bien";}
    elseif ($nota < 9) { echo "Notable";}
    else  { echo "Sobresaliente";}
    ?>
</body>
</html>