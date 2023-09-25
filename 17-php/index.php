<?php

echo "<br>";
echo "********* include /  include_once / require / require_once **********";
echo "<br>";
echo "<br>";
require 'file.php';
$x++;
echo $x;
echo "<br>";
require 'file.php';
echo $x;
echo "<br>";

echo "HELLO WORLD!";

ob_start();
include './utils/nav.php';
$nav = ob_get_clean();
$nav = str_replace('About', 'About Us', $nav);

echo "<br>";
echo $nav;


