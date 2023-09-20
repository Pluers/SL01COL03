<?php
function array_random()
{
    $array = ["1", "2", "3", "4", "5", "6", "7", "8"];
    // echo "<br>";
    // echo array_rand($array, 1);
    // $random_keys = array_rand($array, count($array));
    shuffle($array);
    echo $array[0] . "<br>";
}
function dump($variable)
{
    // var_dump($variable);
    echo "'" . $variable . "'" . "<br>";
    echo strlen($variable) . "<br>";
    echo gettype($variable) . "<br>";
}
function changeTheme()
{
    date_default_timezone_set('Europe/Amsterdam');
    $time = date('H');

    if ($time >= 6 && $time <= 18) {
        echo "background: linear-gradient(0deg, blue, transparent)";
    } else {
        echo "background: linear-gradient(0deg, red, darkred)";
    }
}
