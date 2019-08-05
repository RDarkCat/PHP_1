<?php

function addition($a, $b)
{
    return $a + $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function division($a, $b)
{
    if ($b === 0) {
        return 'Division by zero';;
    }
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'add':
            $result = addition($arg1, $arg2);
            break;
        case 'mul':
            $result = multiply($arg1, $arg2);
            break;
        case 'div':
            $result = division($arg1, $arg2);
            break;
        case 'sub':
            $result = subtract($arg1, $arg2);
            break;
        default:
            $result = 'Nothing';
    }
    return $result;
}
