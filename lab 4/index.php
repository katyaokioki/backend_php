<?php

// Регулярные выражения
$str = 'Ivanov Ivan Ivanovich';
echo "$str<br>";

preg_match('/([A-Z][a-z]*) ([A-Z])[a-z]* ([A-Z])[a-z]*/', $str, $matches);
// var_dump($matches);

// echo "<br>";
// echo $matches[1].' '.$matches[2].'.'.$matches[3].'.';
// echo "<br>";


// echo str_replace('a', '!','aabbaa');
// echo "<br>";
// echo preg_replace('/a/', '!','aabbaa');
// echo "<br>";
// echo str_replace('A', '!','aAbbAa');
// echo "<br>";
// echo preg_replace('/A/i', '!','aAbbAa');

// echo preg_replace('/xax/','!','xax xaxax');
// echo "<br>";
// // . любой символ
// echo preg_replace('/x.x/','!','xax xax xcx xux x5x');
// echo "<br>";
// echo preg_replace('/xa+x/','!','xax xaaax xbx');
// echo "<br>";
// echo preg_replace('/xa*x/','!','xx xax xaax xbx');
// echo "<br>";
// // + один и более раз
// // * ноль и более раз
// echo preg_replace('/(xa)+x/','!','xax xaaax xaxaxaxt xbx');
// echo "<br>";
// echo preg_replace('/[xa]+/','!','xax xaaax aaaaaaxxxt xbx');
// echo "<br>";
// // () группа - обязательн все
// // [] диапазон - символы на выбор
// // ? либо есть либо нет
// echo preg_replace('/xa?x/','!','xx xax xaax xbx');
// echo "<br>";
// // \ Экранирование спецсимовла
// echo preg_replace('/a\+x/','!','a+x ax aax aaaaaaaaax');
// echo "<br>";

// echo preg_replace('/a.+?x/','!','axxreer4 xax xaax xbx');
// echo "<br>";
// // {} количество
// echo preg_replace('/xa{1,2}x/','!','xa xax xaax xaaax');
// echo "<br>";
// echo preg_replace('/xa{2,}x/','!','xa xax xaax xaaax');//до бесконечности
// echo "<br>";
// echo preg_replace('/xa{2}x/','!','xa xax xaax xaaax');
// echo "<br>";
// echo preg_replace('/xa{,2}x/','!','xa xax xaax xaaax');// не работает , нужно определенное число старта
// echo "<br>";
// echo preg_replace('/\d/','!','1 11 123 abc @@@');//    \d это числа
// echo "<br>";
// echo preg_replace('/\D/','!','111123ab@@@');//    \D это Не числа
// echo "<br>";
// echo preg_replace('/\s/','!','1 11 123 a b@@@');//    \s это пробелы
// echo "<br>";
// echo preg_replace('/\S/','!','1 11 123 a b@@@');//    \S это пробелы
// echo "<br>";
// echo preg_replace('/\w/','!','1 11 123a abc b@@@');//    \w это цифра и буква
// echo "<br>";
// echo preg_replace('/\W/','!','1 11 123a abc b@@@');//    \w это  НЕ цифра и буква
// echo "<br>";
// echo preg_replace('/[abc^]xx/','!','axx bxx cxx exx');//    \включая
// echo "<br>";
// echo preg_replace('/[^abc]xx/','!','axx bxx cxx exx');//    \исключая
// echo "<br>";
// // [A-Za-z-9] [2-5][a-c]
// // [:\-@]:;<>=?@
// echo preg_replace('/[\da-z]xx/','!','axx 3xx Axx exx');
// echo "<br>";
// echo preg_replace('/[а-яА-ЯёЁ]яя/u','!','аяя 1я 2яя');
// echo "<br>";
// // ^ начало строки
// // $ конец строки
// echo preg_replace('/^aaa$/','!','aaa');
// echo "<br>";
// echo preg_replace('/^aaa/','!','aaa aaa aaa');
// echo "<br>";
// echo preg_replace('/aaa$/','!','aaa aaa aaa');
// echo "<br>";
// echo preg_replace('/(a|b+)xx/','!','axx aabxx bxx bbxx exx');
// echo "<br>";
// echo preg_replace('/\b[a-z]+\b/','!','axx bxx xxx exx');
// echo "<br>";
// $var='д\'Артаньян';
// echo preg_replace('/д\'[А][а-я]{7}/u','!',$var);
// echo "<br>";
// echo preg_replace('/\\\+/','!','\\ \\ \\\\');
// echo "<br>";
// echo preg_replace('/a+/','!','a aa aaa aaaa',2);// 4 параметр количество замен
// echo "<br>";



// echo preg_match('/^[a-zA-Z-.]+@[a-z]+\.ru$/','my-mail@mail.ru');
// echo "<br>";


// echo preg_match_all('/a+/','eee aaa bb a');//все совпадения
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// 12 03 2024
// карманы

// preg_match_all('/x(a+)/', 'xx xax xaax xaaax', $matches); 
// print_r($matches);


// echo preg_replace('/(a+)@(b+)/', '$2@$1', 'a@baa@bb');
// echo "<br>";
// echo preg_replace('/[a-z]+/', '!$0!', 'aaa bbb');// !aaa! !bbb!
// echo "<br>";
// echo preg_replace('/([a-z])(<\/\2>)/', '!', 'aaebbc');
// echo "<br>";
// echo preg_replace('/(ab)+([a-z])/' ,'!$1!','abc abx abe');
// echo "<br>";
// echo preg_replace( '/([a-z]+):(\d+)/','$2:$1' , 'aaa:444 kkk:333');
// echo "<br>";
// echo preg_replace( '/(\d)\1/','!' , '332 441 550');
echo "<br>";
echo preg_replace( '/(?<=b)a+/','!' , 'xaaaa baaaa');//позитивный просмотр назад
echo "<br>";
echo preg_replace( '/(?<!b)a+/','!' , 'xaaaa baaaa');//негативный просмотр назад
echo "<br>";
echo preg_replace( '/aaa(?=x)/','!' , 'aaax aaab');//позитивный просмотр вперед
echo "<br>";
echo preg_replace( '/aaa(?!x)/','!' , 'aaax aaab');//негативный просмотр вперед
echo "<br>";
echo preg_replace_callback( '/(\d)\+(\d)=/','sum' , '2+3=');

function sum ($matches){
    $result = $matches[0].($matches[1]+$matches[2]);
    return $result;
}
echo "<br>";
// // echo preg_replace( '&.+? # любой симво один или более раз а # потом);
// echo "<br>";
// echo preg_replace( '/(?<=z)yy/','!' , 'zyy ayy');
// echo "<br>";
// echo preg_replace_callback( '/\d/','cube' , 'a1b2c3');

// function sum ($matches){
//     $result = pow($matches[0],3);
//     return $result;
// }

