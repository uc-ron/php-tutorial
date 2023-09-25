<?php

declare(strict_types=1);
echo "<pre>";
echo "<br>";
echo "********* FUNCTIONS in PHP ****************";
echo "<br>";
echo "<br>";


foo();
bar();
function foo()
{
    echo "Hello World!<br>";
    function bar()
    {
        echo "Bar";
    }
}

echo "<br>";
function func(): int
{
    return 1;
}
var_dump(func());
