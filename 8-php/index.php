<?php

echo "<br>";
echo "**********STRINGS IN PHP***************";
echo "<br>";
echo "<br>";
$firstName = "John";
$lastName = "Doe";

$name = $firstName . " " . $lastName;

echo $name;
echo "<br>";
echo $name[0];
echo "<br>";
$name[1] = "i";
$name[-1] = "l";
echo $name;
echo "<br>";
$name[90] = "u";
$name[18] = "u";
echo $name;
echo "<br>";
echo "<br>";
echo "****heredoc****";
echo "<br>";
$x = 1;
$y = 2;
$z = 3;
$text = <<<TEXT
    line $x
    line $y
    line $z
TEXT;
echo $text;
echo "<br>";
echo nl2br($text);
echo "<br>";

echo "<br>";
echo "****nowdoc****";
echo "<br>";
$x = 1;
$y = 2;
$z = 3;
$text = <<<'TEXT'
    line $x
    line $y
    line $z
TEXT;
echo $text;
echo "<br>";
echo nl2br($text);
echo "<br>";
