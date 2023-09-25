<?php

echo "<pre>";
echo "<br>";
echo "***** return declare goto *****";
echo "<br>";
echo "<br>";

function sum($x, $y)
{
    return $x + $y;
}

echo sum(8, 9);
echo "<br>";
echo "***** declare-> ticks, encoding, strict_type *****";
echo "<br>";
echo "<br>";

function onTick()
{
    echo "Tick<br>";
}

register_tick_function('onTick');

declare(ticks=2);
echo "hello<br>";
echo "hello<br>";
echo "hello<br>";
echo "hello<br>";
echo "hello<br>";
echo "hello<br>";

return;
// EVERYTHING AFTER THIS IS UNREACHABLE
