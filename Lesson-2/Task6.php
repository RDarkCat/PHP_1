<?php

function myPow($x, $y)
{
    if ($y == 0) {
        return 1;
    }

    return $x * myPow($x, $y - 1);
}

echo myPow(2, rand(0, 14));
