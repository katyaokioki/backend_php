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
