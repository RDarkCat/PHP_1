<?php
/*
 *  мне кажется более профессиональный вариант задания №7, но это не точно :)
 *
 */

$hours = rand(1, 24);
$minutes = rand(1, 59);

function makeMinutes($minutes)
{
    $minutes_1 = array(1, 21, 31, 41, 51);
    $minutes_2 = array(2, 3, 4, 22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54);

    if (in_array($minutes, $minutes_1)) {
        return "$minutes минута";
    } elseif (in_array($minutes, $minutes_2)) {
        return "$minutes минуты";
    }

    return "$minutes минут";
}

function makeHours($hours)
{
    $hours_1 = array(1, 21);
    $hours_2 = array(2, 3, 4, 22, 23, 24);

    if (in_array($hours, $hours_1)) {
        return "$hours час ";
    } elseif (in_array($hours, $hours_2)) {
        return "$hours часа ";
    }

    return "$hours часов ";
}

function makeTime($hours, $minutes)
{
    return makeHours($hours) . makeMinutes($minutes);
}

echo makeTime($hours, $minutes);
