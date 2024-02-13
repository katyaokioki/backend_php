<?php
    function separation(){
        echo '<br>------------------<br>';
    }


    $m1 = array('summer');
    print $m1[0].'<br>';

    $m2 [0] = 'winter';
    var_dump($m2);

    $m3 = array(3, 'automn', 100);
    $m3[3] = 7;
    $m2[5] = 'five';
    $m3[6] = 22;
    var_dump($m3);
    separation();

    // for ($i=0; $i < count($m3); $i++) { 
    //     echo $m3[$i].'<br>';
    // }

    separation();

    foreach($m3 as $value){
        echo $value.'<br>';
    }

    separation();
    foreach($m3 as $key=>$value){
        echo $key.'=>'.$value.'<br>';
    }

    $a = array(1,2);
    $b = array(3,4);

    $c = $a + $b;
    var_dump($c);
    echo '<br>';
    foreach($c as $key=>$value){
        echo $key.'='.$value.'<br>';
    }

    separation();
    $d= array(2 => 'a', 3 => 'b', 8 => 'c');
    var_dump($a+$d);

    separation();
    var_dump($a == $b);
    echo '<br>';
    var_dump($a === $b);
    echo '<br>';
    var_dump($a != $b);
    echo '<br>';
    var_dump($a !== $b);


    //13 02
    // separation();
    // sort($m3);
    // foreach($m3 as $key=>$value){
    //     echo $key.' '.$value.'<br>';
    // }
    // separation();

    // ksort($m3);
    // foreach($m3 as $key=>$value){
    //     echo $key.' '.$value.'<br>';
    // }

    //методы массивов

    // echo array_pop($m3);

    // echo array_push($m3,3);
    
    // var_dump($m3);
    
    // echo array_unshift($m3,3,4,6);
    // separation();

    // var_dump($m3);

    //двумерные массивы

    $M2 = [
        [1,2,3],
        ['one','two'],
        ['a', 2, 'big',4]
    ];

    var_dump($M2);
    separation();

    foreach($M2 as $arr){
        foreach($arr as $value){
            echo $value.',';
        }
        echo '<br>';
    }

    separation();

    function compare($x,$y){
        if ($x[1] == $y[1]) return 0;
        else if ($x[1] > $y[1]) return 0;
        else return 1;
    }

    usort($M2,'compare');
    foreach($M2 as $arr){
        foreach($arr as $value){
            echo $value.',';
        }
        echo '<br>';
}
    




$M3[0] = 'blue';
$M3[1] = 'yellow';
for ($i=0; $i < count($M3); $i++) { 
    echo $M3[$i].'<br>';
}

separation();


$M[0]=100;

$M[1]=200;

$M['red']='красный';

$M[3]=NULL;

$M[4]=FAlSE;

$M[5]='';

$M[8]=300;

foreach($M2 as $key => $value){
    echo $key.'=>'.$value;
}