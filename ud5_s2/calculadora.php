<?php
$a=1;
$b=2;
$op="+";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "calculadora" ?></title>
</head>
<body>
<?php

if (in_array($op, ["/", "%", "div"]) && $b == 0) {
    echo "Error: no se puede dividir entre 0";
} else {
    $resultado = match ($op) {
        "+"     => $a + $b,
        "-"     => $a - $b,
        "*"     => $a * $b,
        "/"     => $a / $b,
        "%"     => $a % $b,
        "**"    => $a ** $b,
        "div"   => intdiv($a, $b),
        default => null,   
    };

    if ($resultado === null) {
        echo "Error: operación no válida";
    } else {
        echo "$a $op $b = $resultado <br>";
        var_dump($resultado);
    }
}
?>
</body>
</html>