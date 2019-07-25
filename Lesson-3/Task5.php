<?php
/*
 * 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
 */


// тут простой вызов стандартной функций.
function replaceToSpaces($inputString, $from, $to)
{
    return str_replace($from, $to, $inputString);
}

// добавим немного алгоритма.
function replaceToSpacesExtended($inputString, $from, $to)
{
    $temp = array();
    $resultArray = str_split($inputString);
    foreach ($resultArray as $item) {
        if ($item === $from)
        {
            array_push($temp, $to);
        } else {
            array_push($temp, $item);
        }
    }

    return implode("", $temp);
}

// ну и еще один вариант
function replaceToSpacesExtended2($inputString)
{
    return strtr($inputString, array(" " => "_"));
}

$testString = "This is a test string";

echo replaceToSpaces($testString, " ", "_");
echo "</br>";
echo replaceToSpacesExtended($testString, " ", "_");
echo "</br>";
echo replaceToSpacesExtended2($testString);
