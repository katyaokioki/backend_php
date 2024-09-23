<?php

$equation = '5*x=10'

$parts = explode('=', $equation);

$left = trim($parts[0]);
$right = trim($parts[1]);

$operators = array('+', '-', '*', '/');
$operator = '';
foreach ($operators as $op) {
    if (strpos($left, $op) !== false) {
        $operator = $op;
        break;
    }
}

$variables = array('x', 'y', 'z'); 
$variable = '';
foreach ($variables as $var) {
    if (strpos($left, $var) !== false) {
        $variable = $var;
        break;
    }
}

if (!empty($operator) && !empty($variable)) {
    $leftParts = explode($operator, $left);
    $leftValue = floatval($leftParts[0]);
    $rightValue = floatval($right);

    switch ($operator) {
        case '+':
            $result = ($variable === 'x') ? ($rightValue - $leftValue) : ($rightValue + $leftValue);
            break;
        case '-':
            $result = ($variable === 'x') ? ($rightValue + $leftValue) : ($leftValue - $rightValue);
            break;
        case '*':
            $result = ($variable === 'x') ? ($rightValue / $leftValue) : ($rightValue * $leftValue);
            break;
        case '/':
            if ($leftValue != 0) {
                $result = ($variable === 'x') ? ($rightValue * $leftValue) : ($rightValue / $leftValue);
            } else {
                $result = "Деление на ноль!";
            }
            break;
        default:
            $result = "Неизвестный оператор!";
            break;
    }

    echo "Оператор: $operator<br>";
    echo "Переменная: $variable<br>";
    echo "Результат: $result";
} else {
    echo "Уравнение имеет неподдерживаемый формат или отсутствует переменная.";
}
?>