<?php
/* Ejercicios de Operadores  */
$a = 17;
$b = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= "Operadores" ?></title>

</head>
<style>
    table{
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid black;
        padding: 6px 10px;
    }
</style>
<body>
    <table style="border: 2px solid black;">
        <tr>
            <th>Operación</th>
            <th>Resultado</th>
            <th>Tipo</th>
        </tr> 
        <tr>
            <td><?= "$a +  $b"; ?> </td>
            <td><?= $a  + $b ?></td>
            <td><?= gettype($a  + $b) ?></td>
        </tr>
        <tr>
            <td><?= "$a -  $b"; ?> </td>
            <td><?= $a  - $b ?></td>
            <td><?= gettype($a - $b) ?></td>
        </tr>
        <tr>
            <td><?= "$a * $b"; ?> </td>
            <td><?= $a * $b ?></td>
            <td><?= gettype($a * $b) ?></td>
        </tr>
        <tr>
            <td><?= "$a /  $b"; ?> </td>
            <td><?= $a / $b ?></td>
            <td><?= gettype($a  / $b) ?></td>
        </tr> <!-- Uncaught DivisionByZeroError: Error Division de 0 -->
        <tr>
            <td><?= "$a \%  $b"; ?> </td>
            <td><?= $a  % $b ?></td>
            <td><?= gettype($a % $b) ?></td>
        </tr>
        <tr>
            <td><?= "$a **  $b"; ?> </td>
            <td><?= $a ** $b ?></td>
            <td><?= gettype($a ** $b) ?></td>
        </tr>
        <tr>
            <td><?= "intdiv($a,$b)"; ?> </td>
            <td><?= intdiv($a,$b) ?></td>
            <td><?= gettype(intdiv($a,$b)) ?></td>
        </tr> <!-- Al cambiar $b a 0 no se muestran las demas filas ni lo otro -->
    </table>
    <pre><?php
    echo "Comparacion con resultado var_dump()<br>";
    echo '$a == "17" -> ';  
    var_dump($a == "17");
    echo '$a === "17" -> '; 
    var_dump($a === "17");
    echo '$a <=> $b -> ';   
    var_dump($a <=> $b);
      
    ?>
    <pre>
</body>
</html>