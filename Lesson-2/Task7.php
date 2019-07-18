<?php
/*
 * 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:

22 часа 15 минут
21 час 43 минуты
 */


$hours = rand(1, 24);
$minutes = rand(1, 59);
function makeHours($hours)
{
    switch ($hours) {
        case 1:
        case 21:
            return "$hours час ";
            break;
        case 2:
        case 3:
        case 4:
        case 22:
        case 23:
        case 24:
            return "$hours часа ";
            break;
        default:
            return "$hours часов ";
            break;
    }
}

function makeMinutes($minutes)
{
    switch ($minutes) {
        case 1:
        case 21:
        case 31:
        case 41:
        case 51:
            return "$minutes минута";
            break;
        case 2:
        case 3:
        case 4:
        case 22:
        case 23:
        case 24:
        case 32:
        case 33:
        case 34:
        case 42:
        case 43:
        case 44:
        case 52:
        case 53:
        case 54:
            return "$minutes минуты";
            break;
        default:
            return "$minutes минут";
            break;
    }
}

function makeTime($hours, $minutes)
{
    return makeHours($hours) . makeMinutes($minutes);
}

echo makeTime($hours, $minutes);
