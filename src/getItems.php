<?php

function getItems($date = '2021-01-01')
{
    $connect = mysqli_connect('localhost', 'root', '', 'warehouse');
    $products = mysqli_query($connect, "SELECT  product, sum(count), sum(price), date FROM deliveries WHERE date <='".$date."' GROUP BY product");
    $products = mysqli_fetch_all($products);
    $items = [];
    foreach ($products as $item) {
        $name = $item[0];
        $count = $item[1];
        $price = $item[2] / $item[1];
        if ((int)$price % 10 !== 0) {
            $price = round($price);
        }
        $date = $item[3];
        $items[$name] = ['Количество' => $count, 'Цена' => $price, 'Дата' => $date];
    }
    return $items;
}

