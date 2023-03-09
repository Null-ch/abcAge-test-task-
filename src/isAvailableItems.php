<?php

function isAvailableItems($array, $sockOrders)
{
    $result = $array;

    foreach ($array as $key => $value) {
        if ($key === 'Левый носок') {
            $result[$key] = $value;
            $result[$key]['Количество'] = $array[$key]['Количество'] - $sockOrders;
            $result[$key]['Цена'] = $result[$key]['Цена'] * $result[$key]['Количество'];
        } else {
            $result[$key] = $value;
            $result[$key]['Цена'] = $result[$key]['Цена'] * $array[$key]['Количество'];
        }
    }
    return $result;
}
