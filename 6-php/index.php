<?php

echo "<br>";
echo "**************INTEGERS***************";
echo "<br>";
echo "<br>";
echo "max_int_value -> " . PHP_INT_MAX;

echo "<br>";
echo "min_int_value -> " . PHP_INT_MIN;
echo "<br>";
var_dump(PHP_INT_MAX+1);
echo "<br>";
var_dump((int)(PHP_INT_MAX+1));
echo "<br>";
var_dump((int)"69abcdef67");
echo "<br>";
var_dump(200_000);
echo "<br>";


$x = 5;
echo $x . "<br>";
$x = 0x2A; // octa nums
echo $x . "<br>";
$x = 0b11; // binary nums
echo $x . "<br>";
