<?php

echo "<pre>";
echo "<br>";
echo "************OPERATORS in PHP******************";
echo "<br>";
echo "<br>";
echo "****Arthmetic Operator (+ - * / ** %)  ****";
echo "<br>";

$x = 10;
$y = 2;

var_dump($x + $y) . "<br>";
var_dump($x - $y) . "<br>";
var_dump($x * $y) . "<br>";
var_dump($x / $y) . "<br>";
var_dump($x % $y) . "<br>";

echo "<br>";
echo "****Assignment Operator (= += -= *= /= %= **=)  ****";
echo "<br>";
$x = 5;
$x = $y = 10;
$x += 10;

var_dump($x);

echo "<br>";
echo "****String Operator (. .=)  ****";
echo "<br>";
$x = "Hello";

$x = $x . " World!";
$x  .= " concated";
echo ($x);

echo "<br>";
echo "<br>";
echo "****Comparison Operator (== === <> != !== < > <= >= ?? ?:)  ****";
echo "<br>";
$x = 51;
$y = 10;
$z = null;

$result = $x === $y ? "Equal" : "Not Equal";
$res = $z ?? "Hello";

var_dump($x == $y) . "<br>";
var_dump($x === $y) . "<br>";
var_dump($x != $y) . "<br>";
var_dump($x !== $y) . "<br>";
var_dump($x <> $y) . "<br>";
var_dump($x <=> $y) . "<br>";
echo($result) . "<br>";
var_dump($res) . "<br>";
