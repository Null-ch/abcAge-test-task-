<?php
function itemCount($orders, $itemsCount) {
    if ($orders >= $itemsCount) {
        return 0;
    } else {
        return $itemsCount - $orders;
    }
}
