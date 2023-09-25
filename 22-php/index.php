<?php

echo "<pre>";
echo "<br>";
echo "****** DATE & TIME in PHP ******";
echo "<br>";
echo "<br>";
date_default_timezone_set('Asia/Kolkata');
$currentTime =  time();
echo $currentTime;
echo "<br>";
echo $currentTime + 5 * 24 * 60 * 60;
echo "<br>";
echo date('m/d/Y g:ia'); 
echo "<br>";

echo date('m/d/Y g:ia',mktime(1,0,0,4,10,null));
echo "<br>";
echo strtotime('2023-09-25 11:40:50');
