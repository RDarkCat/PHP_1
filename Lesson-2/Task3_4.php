<?php
/*
 * Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
 */

$first = rand(1, 100);
$second = rand(1, 100);
$generateOperation = rand(1, 4);

function getOperation($randomItem)
{
    $operationArray = array(
        1 => 'addition',
        2 => 'multiply',
        3 => 'division',
        4 => 'subtract'
    );

    return $operationArray[$randomItem];
}

function addition($a, $b) {
    return $a + $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function division($a, $b) {
    if ($b === 0) {
        echo 'Division by zero';
        return null;
    }

    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {

    switch ($operation) {
        case 'addition':
            $result = addition($arg1, $arg2);
            break;
        case 'multiply':
            $result = multiply($arg1, $arg2);
            break;
        case 'division':
            $result = division($arg1, $arg2);
            break;
        case 'subtract':
            $result = subtract($arg1, $arg2);
            break;
        default:
            $result = 'Nothing';
    }

    return $result;
}

$mathOperationString = getOperation($generateOperation);
echo "Случайное число 1: $first</br>";
echo "Случайное число 2: $second</br>";
echo "Выбранная случайная арифметическая операция " . $mathOperationString . "</br>";
echo mathOperation($first, $second, $mathOperationString);
