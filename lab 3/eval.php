<?php
    $f = 'sin';
    // $x = 30;
    // eval("\$z = $f($x/180*pi());");
    // echo $z;

    // if (!empty($_GET)){
    //     foreach($_GET as $key=>$x){
    //         eval("\$$key='$x';");
    //     }
    //     echo "Фамилия = $fio оклад = $x";

    // }
    if (isset($_GET['x'])){
        $vek = $_GET['x'];
    }

    $XVI = "Иван Васильевич";
    $XVIII = "Петр Алексеевич";
    $XIX = "Николай Павлович";

    echo ' В веке '.$vek.' царствовал  '.$$vek;

