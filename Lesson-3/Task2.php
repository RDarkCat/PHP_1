<?php
/*
 * С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
    0 – это ноль.
    1 – нечётное число.
    2 – чётное число.
    3 – нечётное число.
    …
    10 – чётное число.

 */

$i = 0;
do {
    if ($i == 0) {
        echo "$i – это ноль.</br>";
        $i++;
        continue;
    } elseif ($i % 2 == 0) {
        echo "$i - чётное число.</br>";
    } else {
        echo "$i - нечётное число.</br>";
    }
    ++$i;
} while ($i <= 10);
