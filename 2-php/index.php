<?php

// VARIABLE
$firstName = "john";
echo $firstName . '<br>';

// CONSTANT
define('STATUS_PAID', 'paid'); // or const STATUS_PAID='unpaid';
echo STATUS_PAID.'<br>';

// CHECK CONSTANT
echo defined('STATUS_PAID') . '<br>';

// PRE-DEFINED CONSTANT
echo PHP_VERSION . "<br>";
// MAGIC CONSTANTS
echo __LINE__ . "<br>";

// VARIABLE VARIABLES
$foo = 'bar';
$$foo = 'baz'; // ==> $bar = 'baz'
echo $foo.'<br>';
echo "$bar".'<br>'; // same as $$foo;


