<?php

declare(strict_types=1);
echo "<pre>";
echo "<br>";
echo "****** variable, anonymous & arrow function in php ******";
echo "<br>";
echo "<br>";

echo "#### variable function ####";
echo "<br>";
function sum(int|float ...$numbers): int|float
{
    return array_sum($numbers);
}
$x = 'sum';

if (is_callable($x)) {
    echo sum(1, 2, 3, 4, 5.5);
} else {
    echo "Not Callable";
}
echo "<br>";
echo "<br>";
echo "#### anonymous function ####";
echo "<br>";

$sum = function (callable $callback, ...$vars) use ($x) {
    echo $x;
    echo "<br>";
    return $callback(array_sum($vars));
};
echo $sum('foo', 1, 3, 4);
echo "<br>";

$arr = [1, 2, 3, 4];
function foo($element)
{
    return $element * 2;
};
$arr2 = array_map('foo', $arr);
print_r($arr2);
echo "<br>";

echo "<br>";
echo "#### Arrow function ####";
echo "<br>";

$arr = [1, 2, 3, 4];

$arr2 = array_map(fn ($num) => $num * $num, $arr);
print_r($arr2);
echo "<br>";
