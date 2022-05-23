<?php
/*
## Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà 
contenere lo stesso numero più di una volta
*/

$numbers = [];
while (count($numbers) < 15) {
    $number = rand(1, 1000);
    if (!in_array($number, $numbers)) {
        $numbers[] = $number;
    }
}
sort($numbers);
var_dump($numbers);
