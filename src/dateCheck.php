<?php

function dateCheck($date)
{
    $validation = explode('.', $date);
    $errors = [];
    if (!$date) {
        $errors['Ошибка'] =  "Поле не может быть пустым";
    } elseif (is_numeric($date)) {
        $errors['Ошибка'] =  "Введено число. Добавьте разделители";
    } elseif (count($validation) < 3) {
        $errors['Ошибка'] =  "Некорректный разделитель";
    } elseif ($validation[0] > 31) {
        $errors['Ошибка'] =  "День введен неверно";
    } elseif ($validation[1] > 12) {
        $errors['Ошибка'] =  "Месяц введен неверно";
    } elseif ($date < "01.01.2021") {
        $errors['Ошибка'] =  "На введенную вами дату поставок еще не осуществлялось";
    }
    return $errors;
}
