<?php

function fib($number, $max)
{
    if ($number === 0) {
        return 0;
    }

    if ($number === 1) {
        return 1;
    }

    $first = 0;
    $second = 1;

    $result = $first + $second;
    for ($i = 2; $i <= $number && $result <= $max; $i++) {
        $result = $first + $second;
        $first = $second;
        $second = $result;
    }

    return $result;
}
