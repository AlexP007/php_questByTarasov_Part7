<?php

namespace AlexP;
//массив для проверки
$goods =[ [ "title" => "Телефон", "price" => 8e4, "reviews" => 107, "rating" => 11], [ "title" => "Чайник", "price" => 4e3, "reviews" => 120, "rating" => 12], [ "title" => "Телевизор", "price" => 5e4, "reviews" => 110, "rating" => 14], [ "title" => "Холодильник", "price" => 3e4, "reviews" => 130, "rating" => 15], [ "title" => "Ноутбук", "price" => 7e3, "reviews" => 110, "rating" => 13],[ "title" => "Планшет", "price" => 4e4, "reviews" => 104, "rating" => 10], [ "title" => "Грелка", "price" => 4e3, "reviews" => 117, "rating" => 9] ];

/**
 * @param $args
 * вставляет на страницу html код с текстом $args
 */

function print_r($args){
    $result = is_array($args) ? fromArrayToString($args) : $args;   // если массивБ преобразуем в строку
    
    echo "<pre><code class=\"PHP\">$result</code></pre> " ; // вывод, можно ретёрн, но повторяю реализацbю print_r()
}

/**
 * @param $arr
 * @return string строку из массива
 */
function fromArrayToString($arr) {
    
    $result = '[';
    
        foreach ($arr as $key => $value) {
            $result .= is_array($value)
                ? "$key => [".fromArrayToString($value)."]\n"
                : "($key => $value)\n ";
        }
        return $result .= ']';
    }
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

<?php print_r($goods) ?>
<?php print_r('string') ?>


