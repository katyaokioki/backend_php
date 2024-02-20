<?php
    $a = 5;
    $b = &$a;
    echo "Переменная а = $a, Переменная b = $b<br>"; 
    $b=10;
    echo "Переменная а = $a, Переменная b = $b<br>"; 

    $c = 20;
    $z = 'c';

    echo "Переменная c = $c, Переменная z = $z<br>"; 
    echo 'Переменная c ='.$c.', Переменная z = '.$$z.'<br>'; 

    $d=1;
    $f=2;
    $k=3;

    echo "До изменения  d=$d, f=$f, k=$k <br>";
    // list($d, $f, $k) = F1($d,$f,$k); локальная область видимости
    echo "d=$d, f=$f, k=$k";

    // function F1($d, $f, k){ вызов фции с локальной областью видимости
    //     $d++;
    //     $f--;
    //     $k+=$k;
    //     return array($d, $f, $k);
    // }
    function F1(&$d, &$f, &$k){ //перемнные как ссылки 
        $d++;
        $f--;
        $k+=$k;
        return array($d, $f, $k);
    }

    //символическая функция на название ф-ции
echo '<br>';
    $func = 'sin';
    $y=30;
    $x=$y/180*pi();

    $z=$func($x);
    print "$func ($y<SUP>o</SUP>)= $z<BR>";

    function ex_val($func,$x){
        $res = $func($x)+1;
        return $res;
    }