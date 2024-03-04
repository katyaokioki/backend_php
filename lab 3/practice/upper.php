<?php
$file_path = $_SERVER['DOCUMENT_ROOT'] . '/test.txt';

// Чтение чисел из файла
$numbers = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Вычисление суммы
$sum = array_sum($numbers);

// Запись суммы в конец файла с новой строки
file_put_contents($file_path, PHP_EOL . $sum, FILE_APPEND);

echo 'Сумма чисел успешно записана в конец файла.';
?>
