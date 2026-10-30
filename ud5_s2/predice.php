<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Prediccion" ?></title>
</head>
<body>
    <table>
        <tr>
            <th>Nº</th>
            <th>Instruución</th>
            <th>Resultado</th>
        </tr>
        
        <tr>
            <th>1</th>
            <th>var_dump("abc" == 0); </th>
            <th><?= var_dump("0" ?? "vacío");  ?></th>
        </tr><!-- Es falso porque una cadena de texto no seria iguan a un numero -->
        <tr>
            <th>Nº</th>
            <th>var_dump(null == false); </th>
            <th><?= var_dump(null == false);  ?></th>
        </tr><!-- Seria verdadero porque null es como que no hay nada -->
        <tr>
            <th>Nº</th>
            <th>var_dump("1" == "01");  </th>
            <th><?= var_dump("1" == "01");  ?></th>
        </tr><!-- es verdad es lo mismo -->
        <tr>
            <th>Nº</th>
            <th>var_dump(7 / 2); </th>
            <th><?= var_dump(7 / 2);  ?></th>
        </tr><!-- Devuelve int y 3 -->
        <tr>
            <th>Nº</th>
            <th>var_dump(-7 % 2); </th>
            <th><?= var_dump(-7 % 2);  ?></th>
        </tr><!-- devuelve float-->
        <tr>
            <th>Nº</th>
            <th>$r = true and false; var_dump($r);  </th>
            <th><?= $r = true and false; var_dump($r);  ?></th>
        </tr><!-- dara error -->
        <tr>
            <th>Nº</th>
            <th>var_dump("0" ?: "vacío"); </th>
            <th><?= var_dump("0" ?: "vacío");  ?></th>
        </tr><!--  -->
        <tr>
            <th>Nº</th>
            <th>var_dump("0" ?? "vacío"); </th>
            <th><?= var_dump("0" ?? "vacío");  ?></th>
        </tr><!-- -->
    </table>
    <?php
    
    
    
    ?>
</body>
</html>