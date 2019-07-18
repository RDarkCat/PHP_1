<?php

//2. Выполнить примеры из методички и разобраться, как это работает.
namespace example1 {
    echo "Hello, World!";
    echo "</br>";
}

namespace example2 {
    $name = "GeekBrains user";
    echo "Hello, $name!";
    echo "</br>";
}

namespace example3 {
    define('MY_CONST', 100);
    echo MY_CONST;
    echo "</br>";
}
namespace example4 {
    $int10 = 42;
    $int2 = 0b101010;
    $int8 = 052;
    $int16 = 0x2A;
    echo "Десятеричная система $int10 <br>";
    echo "Двоичная система $int2 <br>";
    echo "Восьмеричная система $int8 <br>";
    echo "Шестнадцатеричная система $int16 <br>";
    echo "</br>";
}

namespace example5 {
    $precise1 = 1.5;
    $precise2 = 1.5e4;
    $precise3 = 6E-8;
    echo "$precise1 | $precise2 | $precise3";
    echo "</br>";
}

namespace example6 {
    $a = 1;
    echo "$a";
    echo '$a';
    echo "</br>";
}

namespace example7 {
    $b = 10;
    $b = (boolean) $b;
    echo "</br>";
}

namespace example8 {
    $a = 'Hello,';
    $b = 'world';
    $c = $a . $b;
    echo $c;
    echo "</br>";
}


namespace example9 {
    $a = 4;
    $b = 5;
    echo $a + $b . '<br>';    // сложение
    echo $a * $b . '<br>';    // умножение
    echo $a - $b . '<br>';    // вычитание
    echo $a / $b . '<br>';  // деление
    echo $a % $b . '<br>'; // остаток от деления
    echo $a ** $b . '<br>'; // возведение в степень
    echo "</br>";
}
