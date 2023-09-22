<?php

echo "<pre>";
echo "<br>";
echo "*********** LOOPS in PHP **************";
echo "<br>";
echo "<br>";
echo "#### while ####";
echo "<br>";

$i = 0;

while ($i <= 15) {
    echo $i++ . " ";
}
echo "<br>";
// Same as above
// while ($i <= 15) 
//     echo $i++ . "<br>";

$i = 0;
while (true) {
    if ($i >= 15) {
        break;
    }
    if ($i == 3) {
        $i++;
        continue;
    }
    echo $i++ . " ";
}
echo "<br>";
// Same as above
$i = 0;
while (true) :
    if ($i >= 15) {
        break;
    }
    echo $i++ . " ";
endwhile;
echo "<br>";

echo "<br>";
echo "#### do-while ####";
echo "<br>";
$i = 0;
do {
    echo $i++ . " ";
} while ($i <= 15);
echo "<br>";

do {
    echo $i++ . " ";
} while ($i <= 15);

echo "<br>";

echo "<br>";
echo "#### for ####";
echo "<br>";

for ($i = 0; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";
// same as above
for ($i = 0; $i <= 10; print($i . " "),  $i++) {
    // echo $i . " ";
}

echo "<br>";

echo "<br>";
echo "#### foreach (array / object only) ####";
echo "<br>";
$programmingLanguages = ["JavaScript", "Java", "C++", "PYTHON", "C#"];
foreach ($programmingLanguages as $key => &$lang) {
    echo "$key : $lang <br>";
}
echo $key;
echo "<br>";
echo $lang;
echo "<br>";
echo "<br>";

$lang = "Go";
var_dump($programmingLanguages);
foreach ($programmingLanguages as $key => $lang) {
    echo "$key : $lang <br>";
}

echo $key;
echo "<br>";
echo $lang;
