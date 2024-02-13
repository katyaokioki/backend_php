<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- X * 7 = 49 -->
<body>
    <h1>Лабораторная работа№2</h1>
    <?php
    $stock = "X*7=49";
    echo 'Уравнение: X * 7 = 49';

    $parts =  explode("=", $stock);
    $left = $parts[0];
    $right = $parts[1];

    $opera =  explode("*", $left);
    $numerator = $opera[0];
    $multiplier = $opera[1];
    
    echo '<br>'.'Значение x = '.$right/$multiplier. '<br>';


    
    if (strpos($numerator, 'X') !== false){
        $position = "Первый множитель";
    } else if (strpos($multiplier, 'X') !== false){
        $position = "Второй множитель";
    }

    echo 'Расположение неизвестной переменной - '.$position; 


    ?>
</body>
</html>