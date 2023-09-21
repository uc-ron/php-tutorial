<?php

echo "<br>";
echo "**************FLOATS**************";
echo "<br>";
echo "<br>";

$x = 13.5;

echo $x;
echo "<br>";
$x = 13.5e3;

echo $x;
echo "<br>";
$x = 13.5e-3;

echo $x;
echo "<br>";


echo "max_float_value -> " . PHP_FLOAT_MAX;
echo "<br>";
echo "min_float_value -> " . PHP_FLOAT_MIN;
echo "<br>";

echo "<br>";
echo (floor((0.1 + 0.7) * 10));
echo "<br>";
echo (ceil((0.1 + 0.7) * 10));
echo "<br>";
// 0.23 == (1 - 0.23) -> false
echo log(-1);
echo "<br>";
var_dump(is_finite(INF));
echo "<br>";
var_dump(is_finite(5));
echo "<br>";
var_dump(floatval(5)); // (float)5
