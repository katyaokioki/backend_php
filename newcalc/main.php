<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab_4</title>
</head>
<body>
<header> 
        <h1>Замятин М А 231-321 </h1>
    </header>
    <main>
        <div class="wrapper" id="calculator" style="height:600px">
            <form method="post">
                <div class="top">
                    <label class="label">
                        <input class="screen input" type="" name="equation" value="">
                    </label>
                    <button type="reset" class="clear">C</button>
                    <div class="screen result">ИТОГ:
                        <?php
                        function isNum($x)
                        {
                            if ((!$x) or (!is_numeric($x))) {
                                return false;
                            }
                            return true;
                        }
                        function calculate($val)
                        {
                            if (!$val) {
                                return 'Выражение не задано!';
                            }
                            if (isNum($val)) {
                                return $val;
                            }

                            $args = explode('+', $val);
                            if (count($args) > 1) {
                                $sum = 0;

                                for ($i = 0; $i < count($args); $i++) {
                                    $arg = $args[$i];

                                    if (!isNum($arg)) {
                                        $arg = calculate($arg);
                                    }

                                    $sum += (int)$arg;
                                }
                                return $sum;
                            }

                            $args = explode("-", $val);
                            if (count($args) > 1) {
                                if (!is_numeric($args[0])) {
                                    $args[0] = calculate($args[0]);
                                }

                                $minusRez = $args[0];

                                for ($i = 1; $i < count($args); $i++) {
                                    if (!is_numeric($args[$i])) {
                                        $args[$i] = calculate($args[$i]);
                                    }
                                    $minusRez -= $args[$i];
                                }
                                return $minusRez;
                            }

                            $args = explode('*', $val);
                            if (count($args) > 1) {
                                $sup = 1;

                                for ($i = 0; $i < count($args); $i++) {
                                    $arg = $args[$i];
                                    if (!isNum($arg)) {
                                        $arg = calculate($args[$i]);
                                    }
                                    $sup *= (int)$arg;
                                }
                                return $sup;
                            }

                            $args = explode("÷", $val);
                            if (count($args) > 1) {
                                if (!is_numeric($args[0])) {
                                    $args[0] = calculate($args[0]);
                                }
                                $del = $args[0];
                                for ($i = 1; $i < count($args); $i++) {
                                    if (!is_numeric($args[$i])) {
                                        $args[$i] = calculate($args[$i]);
                                    }
                                    if ($args[$i] == 0) {
                                        return 'НА 0 ДЕЛИТЬ НЕЛЬЗЯ!';
                                        $del /= $args[$i];
                                    }
                                }
                                return $del;
                            }
                            return 'Недопустимые символы в выражении';
                        }

                        function SqValidator($val)
                        {
                            $open = 0;
                            for ($i = 0; $i < strlen($val); $i++) {
                                if ($val[$i] == '(') $open++;
                                else {
                                    if ($val[$i] == ')') {
                                        $open--;
                                        if ($open < 0) return false;
                                    }
                                }
                            }
                            if ($open !== 0) return false;
                            return true;
                        }
                        
                        function calculateTrigonometry($func, $arg) {
                            switch ($func) {
                                case 'sin':
                                    return sin(deg2rad($arg));
                                case 'cos':
                                    return cos(deg2rad($arg));
                                case 'tan':
                                    return tan(deg2rad($arg));
                                case 'cot':
                                    return 1 / tan(deg2rad($arg));
                                default:
                                    return 'Неподдерживаемая функция';
                            }
                        }
                        function calculateSq($val)
                        {
                            $val = str_replace(' ', '', $val);
                            if (preg_match('/(sin|cos|tan|cot)\([\d.]+\)/', $val)) {
                                $val = preg_replace_callback('/(sin|cos|tan|cot)\(([\d.]+)\)/', function($matches) {
                                    $func = $matches[1];
                                    $arg = floatval($matches[2]);
                                    return calculateTrigonometry($func, $arg);
                                }, $val);
                            }
                            if (strpos($val, '(') !== false) {
                                $start = strpos($val, '(');
                                $end = $start + 1;
                                $open = 1;
                                while ($open && $end < strlen($val)) {
                                    if ($val[$end] == '(') $open++;
                                    if ($val[$end] == ')') $open--;
                                    $end++;
                                }
                                $new_val = substr($val, 0, $start);
                                $new_val .= calculateSq(substr($val, $start + 1, $end - $start - 2));
                                $new_val .= substr($val, $end);
                                return calculateSq($new_val);
                            }
                            return calculate($val);
                        }
                        
                        if (isset($_POST['equation'])) {
                            $res = calculateSq($_POST['equation']);
                            echo $res;
                        };
                        ?>
                    </div>
                </div>

                <div class="keys">
                    <button class="pins">1</button>
                    <button class="pins">2</button>
                    <button class="pins">3</button>
                    <button class="operator pins">+</button>
                    <button class="pins">4</button>
                    <button class="pins">5</button>
                    <button class="pins">6</button>
                    <button class="operator pins">-</button>
                    <button class="pins">7</button>
                    <button class="pins">8</button>
                    <button class="pins">9</button>
                    <button class="operator pins">÷</button>
                    <button class="pins">0</button>
                    <button class="pins">(</button>
                    <button class="pins">)</button>
                    <button class="operator pins">*</button>
                    <button class="operator pins" style="width:75px">sin</button>
                    <button class="operator pins" style="width:75px">cos</button>
                    <button class="operator pins" style="width:75px">tan</button>
                    <button class="operator pins" style="width:75px">cot</button>
                    <button class="eval" type="submit">ВЫЧИСЛИТЬ</button>
                </div>
            </form>
        </div>
    </main>
    <script src="index.js"></script>
</body>