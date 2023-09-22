<?php

echo "<pre>";
echo "<br>";
echo "************OPERATORS in PHP***************";
echo "<br>";
echo "<br>";
echo "************Error Control Operators (@) ***************";
echo "<br>";
$text = <<<'TEXT'
####   $x = @file("foo.text");
TEXT;
echo $text;
$x = @file('foo.text');

echo "<br>";
echo "<br>";
echo "************Increment Decrement ( ++, --) ***************";
echo "<br>";

$x = 5;

$x++;
++$x;
--$x;
$x--;

echo $x;
echo "<br>";
$x = 'abc';
echo $x++;
echo "<br>";
echo ++$x;

echo "<br>";
echo "<br>";
echo "************Logical Decrement ( && || ! and or xor) ***************";
echo "<br>";

var_dump(1 && 0);
var_dump(1 || 0);
var_dump(!false);
echo "<br>";

echo "<br>";
echo "************Bitwise Operator (& | ^ ~ << >>) ***************";
echo "<br>";
echo "#### It perform operation after binary conversion ####";
echo "<br>";
echo "#### here we use 6 and 3 ==>  110 and 011 ####";
echo "<br>";

$x = 6;
$y = 3;
var_dump($x & $y);
var_dump($x | $y);
var_dump($x ^ $y);
var_dump(~$x & $y);
var_dump($x >> 1);
var_dump($x << 1);
echo "<br>";


echo "<br>";
echo "************Array Operator (+ == === !== <> !=) ***************";
echo "<br>";

$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6];

$z = $x + $y;
print_r($z);
echo "<br>";
$x = ['a' => 1, 'b' => 2];
$y = ['a' => '1', 'b' => 2];
var_dump($x == $y);
var_dump($x === $y);
