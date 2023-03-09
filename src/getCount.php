<?php

function getCount($array, $item)
{
    foreach ($array as $key => $value) {
        if ($key == $item) {
            return $value['Количество'];
        }
    }
}

