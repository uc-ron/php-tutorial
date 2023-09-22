<?php

echo "<pre>";
echo "<br>";
echo "********* CONTROL STRUCTURE in PHP (if/ else/ elseif/ else if) *********";
echo "<br>";
echo "<br>";

$score = 75;
if ($score >= 90) {
    echo 'A';
    if ($score >= 95) {
        echo '+';
    }
} elseif ($score >= 80) {
    echo 'B';
    if ($score >= 85) {
        echo '+';
    }
} elseif ($score >= 70) {
    echo 'C';
    if ($score >= 75) {
        echo '+';
    }
} elseif ($score >= 60) {
    echo 'D';
    if ($score >= 65) {
        echo '+';
    }
} else {
    echo 'F';
}

/* Same as above
if ($score >= 90)
    echo 'A<br>';
*/