<?php

// DATA TYPE AND TYPE CASTING

echo '<br>';
echo '<br>';
echo '**************************4 SCALAR TYPES**********************************';
echo '<br>';
echo '<br>';
// # 4 SCALAR
// bool - true / false 
$bool = true; // -> 1
// int - 1, 2, 0, -2
$int = 65;
// float - 1.2, 0.1, 0.005, -15.8
$float = 89.99;
// string - "john doe", 'hello world'
$string = 'Hello World!';

echo gettype($float) . '<br>';

var_dump($bool);
echo '<br>';
var_dump($float);
echo '<br>';
var_dump($int);
echo '<br>';
echo '<br>';
echo '**************************4 COMPUND TYPES**********************************';
echo '<br>';
echo '<br>';

// ARRAY
$array = [1, 3, 0.9, -99.9, 'A', "Hello", true];
print_r($array);
echo '<br>';
// OBJECTS
// CALLABLE
// ITERABLE


echo '<br>';
echo '<br>';
echo '**************************FUNCTIONS**********************************';
echo '<br>';
echo '<br>';
function sum($x, $y)
{
    return $x + $y;
}

echo sum('2','4');
