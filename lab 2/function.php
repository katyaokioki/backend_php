<?php

//     function _fact($n){
//         $k=1;
//         for ($i=2; $i <= $n; $i++) { 
//             $k*=$i;
//         }
//         return $k;
//     }

//     echo _fact(5);
//     echo '<br';

//     function factRec($n){
//         if ($n < 2) return 1;
//         else return $n*=factRec($n-1);
//     }

//     echo factRec(4);

//     list ($name,$female,$age) = spisok();
//     echo $female.' '.$name.'возраст = '.$age.'<br>';

//     function spisok(){
//         $v=7;
//         return array('Маша', 'Петрова', $v);
//     }

//     echo '<br>---------<br>';
// function sumABC($x,$b = 10 , $c = 20){
//     return $x+$b+$c;
// }

// echo sumABC(3,4,5);


// function order($x,$arr,$str){
//     foreach($arr as $ar){
//         echo $ar.'<br>';
//     }
//     $x+=$x;
//     $lenght = strlen($str);
//     echo $x.'<br>';
//     echo $lenght.'<br>';
// }
// $array = [2,'one',6,10];
// $a=4;
// $key='string';
// order($a,$array,$key);





$a=2;
$b=f($a);

echo "a=$a<br>";
echo "b=$b<br>";

function f($n){
    global $a;
    $a=5;
    $n++;
    echo "func a = $a<br>";
    $b = $a + $n;
    return $b;
}

$b=f($a);
echo "repeat b = $b<br>";