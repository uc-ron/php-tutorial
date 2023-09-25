<?php

echo "<pre>";
echo "<br>";
echo "******** Variable scope in php **********";
echo "<br>";
echo "<br>";

$x = 5;

function foo()
{
    $x = 1;
    echo $x;
    echo "<br>";
}
function foo2($x)
{
    echo $x;
    echo "<br>";
}
function foo3()
{
    global $x;
    echo $x;
    echo "<br>";
}

foo();
foo2($x);
foo3();

// include 'script.php';

// echo $x;
// echo "<br>";

function getValue()
{
    static $x = null;
    if ($x === null) {
        $x = someFunc();
    }

    echo $x;
    echo "<br>";
}

function someFunc()
{
    sleep(2);
    echo "**** processing *****<br>";
    return "Some Value";
}

echo getValue();
echo getValue();
echo getValue();
