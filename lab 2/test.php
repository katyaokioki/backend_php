<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 1 -->
    <?php

        function separation(){
            echo '<br>-----------------------------<br>';
        }
        $array = array('a', 'b', 'c', 'b', 'a');
        $result = array_count_values($array);
        foreach ($result as $letter => $count) {
            echo "Буква '$letter' встречается $count раз(а).<br>";
        }   
    ?>

    <!-- 2 -->
    
    <?php
    $inputArray = array('a' => 1, 'b' => 2, 'c' => 3);
    $flippedArray = array_flip($inputArray);
    print_r($flippedArray);
    $reversedArray = array_reverse($inputArray, true);
    print_r($reversedArray);

    separation();
    // 4
    $keys = array('a', 'b', 'c');
    $values = array(1, 2, 3);
    $combinedArray = array_combine($keys, $values);
    print_r($combinedArray);

    separation();
    // 6
    $array = array('a', 'b', 'c', 'd', 'e');
    $uppercaseArray = array_map('strtoupper', $array);
    print_r($uppercaseArray);

    separation();
    // 8

    $array = array(1, 2, 3, 4, 5);
    $product = array_product($array);

    echo "Произведение элементов массива: $product";

    separation();
    // 9
    $array = array('a' => 1, 'b' => 2, 'c' => 3);
    $randomKey = array_rand($array);
    echo "Случайный ключ: $randomKey";
    
    separation();
    // <!-- 12 -->
    $array = array('a', '-', 'b', '-', 'c', '-', 'd');
    $position = array_search('-', $array);
    echo "Позиция первого элемента '-': $position";
   
    separation();
// 14
    $array = array(1, 2, 3, 4, 5);
    $firstElement = array_shift($array);
    echo "Первый элемент: $firstElement\n";
    $lastElement = array_pop($array);
    echo "Последний элемент: $lastElement\n";
    echo "Оставшиеся элементы массива: ";
    print_r($array);

    separation();
// 33
    $arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
    echo 'Зарплата Пети: ' . $arr['Петя'] . "\n";
    echo 'Зарплата Коли: ' . $arr['Коля'] . "\n";

    separation();
// 35

$daysOfWeek = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье'
];

$day = 3;
if (isset($daysOfWeek[$day])) {
    echo "День недели с номером $day: " . $daysOfWeek[$day];
} else {
    echo "Некорректный номер дня недели.";
}



    separation();
// 54
function sum($a, $b) {
    return $a + $b;
}
$num1 = 5;
$num2 = 7;
$result = sum($num1, $num2);
echo "Сумма чисел $num1 и $num2 равна $result.";

    separtion();
// 

    separation();
// 


    separation();
// 
   
   
   ?>
</body>
</html>