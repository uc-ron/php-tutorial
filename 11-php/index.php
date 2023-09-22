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
