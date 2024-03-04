<?php
    // echo(file_get_contents('text.txt'));
    // var_dump($_SERVER);

    echo $_SERVER['SCRIPT_NAME'];//название исполняемого файла
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __DIR__;
    echo '<br>';
    $text = file_get_contents('text.txt');
    echo $text;
    // file_put_contents('text.txt',$text.'4');

    // rename('text.txt','new.txt');
    // copy('new.txt','text.txt');
    // echo '<br>';
    // var_dump(filesize('new.txt'));
    $text = file_get_contents('new.txt');
    $arr = explode("\r\n",$text);
    echo '<br>';

    var_dump($arr);

    file_put_contents('text.php',implode(PHP_EOL,$arr));

    

