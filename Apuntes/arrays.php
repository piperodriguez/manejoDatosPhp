<?php

/**
 * ARRAY SIMPLE
 */

$conocimientosOne = ['js', 'nodejs', 10 => 'php', 'laravel'];


//print_r($conocimientos);
/**
 * ARRAY COMPLEJO
 * 
 * segun el proge
 */
$conocimientos = [
    'FrontEnd' => 'js',
    'BackEnd' => 'nodejs',
    'framework' => 'laravel',
];
//print_r($conocimientosBase);

/**
 * iterando el array
 * con un ciclo
 */
 /*foreach ($conocimientos as $key => $value) {
    echo "$key: $value <br>";  
 }*/
/**
 * iterando el array
 * con funciona nativa de php
 * 
 */
 echo "<pre>";
 function iterar($arr, $key)
 {
     echo strtoupper($arr).": $key <br>";
 }

array_walk($conocimientos, 'iterar');

/**
 * array_key_exist -> verifica llave
 * in_array -> nose
 * array_keys -> get keys
 * array_values -> get values
 */

 print_r(array_values($conocimientos));










$conocimientosBase = [
    'FrontEnd' => ['js', 'jquery', 'bootstrap', 'vue'],
    'BackEnd' => ['nodejs', 'php'],
    'framework' => ['laravel', 'yii2', 'express',]
];