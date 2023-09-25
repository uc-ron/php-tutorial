<?php

declare(strict_types=1);
echo "<br>";
echo "********* function args and parameters ***********";
echo "<br>";
echo "<br>";

function foo(int|float $x, int|float $y = 9)
{
    return $x * $y;
}

echo foo(5.3);
echo "<br>";

function sum(...$numbers): int|float
{
    // $sum = 0;
    // foreach ($numbers as $num) {
    //     $sum += $num;
    // }
    // return $sum;
    // or
    return array_sum($numbers);
}

echo sum(6.0, 7, 90, 88, 69);
function sum2($x, $y, ...$numbers): int|float
{
    // $sum = 0;
    // foreach ($numbers as $num) {
    //     $sum += $num;
    // }
    // return $sum;
    // or
    return array_sum($numbers);
}
echo "<br>";
echo sum2(6.0, 7, 90, 88, 69);
echo "<br>";
$arr = [6.0, 7, 90, 88, 69];
echo sum2(...$arr);

function multiply($x, $y)
{
    var_dump($x, $y);
    echo "<br>";
    return $x * $y;
}

echo "<br>";
echo multiply(y: 90, x: 88.76);
