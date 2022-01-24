<?php 
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    $numbers = [];
    while( count($numbers) < 15 ) {
        $newNumber = rand(0, 100);
        if (!in_array($newNumber, $numbers)) {
            $numbers[] = $newNumber;
        }
    }
    var_dump($numbers);
?>