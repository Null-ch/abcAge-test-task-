<?php

function dateDiff($currentDate = '2021-01-13')
{
    $frstDate = strtotime("2021-01-13");
    $currentDate = strtotime($currentDate);
    $datediff = $currentDate - $frstDate;

    return floor($datediff / (60 * 60 * 24));
}

