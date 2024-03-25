<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //     $input_string = 'a1b2c3';
    //     $output_string = preg_replace_callback('/\d/', function($matches) {
    //         return $matches[0] . $matches[0];
    //     }, $input_string);
    //     echo $output_string;
        
    //     $string = "http://site.ru"; 
    //     if (preg_match('/^(https?|ttp):\/\/[^\s\/$.?#].[^\s]*$/', $string)) { 
    //         echo "Строка является"; 
    //     } else { 
    //         echo "Строка не является"; 
    //     } 


    // $domain1 = 'hello.site.ru';
    // $domain2 = 'hello.site.com';

    // $pattern = '/^[a-z0-9-]+\.[a-z0-9-]+\.[a-z]{2,6}$/i';

    // echo preg_match($pattern, $domain1) ? "$domain1 - является доменом 3-го уровня" : "$domain1 - не является доменом 3-го уровня";
    // echo '<br>';

    // echo preg_match($pattern, $domain2) ? "$domain2 - является доменом 3-го уровня" : "$domain2 - не является доменом 3-го уровня";
    // echo '<br>';


    // preg_match_all('/\b(\w)\1+\b/', 'aaa bcd xxx efg', $matches); 
    // foreach ($matches[0] as $matches) { 
    //     echo $matches . "\n"; 
    // } 


    // $string = 'aaa@bbb eee7@kkk';
    // $pattern = '/(\w+)@(\w+)/';
    // echo preg_replace($pattern, '$2@$1', $string);


    // $string = 'bbb <hello>Some text</hello>, world <tag>Another text</tag> eee';
    // $pattern = '/<[^>]+>(.*?)<\/[^>]+>/';

    // $replaced = preg_replace($pattern, '!', $string);

    // echo $replaced;
    // echo "<BR>";

    // $string = 'bbb <hello>Some text</hello>, world <tag>Another text</tag> eee';
    // $pattern = '/<[^>]+>(.*?)<\/[^>]+>/';

    // $replaced = preg_replace($pattern, '!', $string);

    // echo $replaced;

    // echo preg_replace('/<[^>]+>/', '!', 'bbb <hello> , <world> eee');
                                                                                                                                                                                                                                                                   
    // $string = 'aaa@bbb eee7@kkk'; 
    // echo preg_replace_callback('/(\w+)@(\w+)/', function($match) { 
    //     return $match[2] . '@' . $match[1]; 
    // }, $string); 

    // echo "<BR>";

    // echo preg_replace('/a\\\a/', '!', 'a\a abc');

    // echo "<BR>";


    // $string = 'aexa axa aeeexa aeexa aexeeexa';
    // echo preg_replace('/a(e{2}|x+)/', '!', $string);

   

    // $date = '31-12-2014';
    // $newDate = preg_replace('/(\d{2})-(\d{2})-(\d{4})/', '$3.$2.$1', $date);

    // echo $newDate;
    // $строка = 'aaa * bbb ** eee * **';

    // // Заменяем одиночные звездочки на '!', не предшествованные другой звездочкой
    // $результат = preg_replace('/(?<!\*)\*(?!\*)/', '!', $строка);

    // // echo $re;
    // echo "<BR>";

    // $str = 'aa aba abba abbba abbbba abbbbba';

    // echo preg_match_all('/ab{4,}a/', $str, $rez);


    // HOMEWORK 19 03 (4.2)

    // 1
    $string = 'waaa baaa';
    echo preg_replace('/(?<!b)a{3}/', '!', $string);
    echo "<BR>";
// 2
    $string = 'a1b2c3';
    echo preg_replace('/(\d)/', '$1$1', $string);
    echo "<BR>";

    // 3
    $string = 'aa aba abba abbba abbbba abbbbba';
    preg_match_all('/ab{1,3}a/', $string , $matches);
    print_r ($matches);
    echo "<BR>";
    // 4
    $string = 'aba aca aea abba adca abea';
    preg_match_all('/a.{2}a/', $string , $matches);
    print_r ($matches);
?>


</body>
</html>