<?php
/*Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
Если $a и $b положительные, вывести их разность.
Если $а и $b отрицательные, вывести их произведение.
Если $а и $b разных знаков, вывести их сумму.
*/


$a = rand(2, 5);
$b = rand(5, 67);

function mathCalculation($valueA, $valueB){
    if ($valueA >= 0 && $valueB >= 0) {
        return $valueA - $valueB;
    } else if ($valueA < 0 && $valueB < 0) {
        return $valueA * $valueB;
    } else if (($valueA > 0 && $valueB < 0) || ($valueA < 0 && $valueB > 0)) {
        return $valueA + $valueB;
    }
}

echo mathCalculation($a, $b);
