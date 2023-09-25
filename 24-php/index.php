<?php

echo "<pre>";
echo "<br>";
echo "****** ERROR HANDLING in PHP ******";
echo "<br>";

// trigger_error('Example Error', E_USER_WARNING);

// echo "1";
// error_log("some error"); 

function errorHandler(int $type, string $msg, ?string $file = null, ?string $line = null,)
{
    echo $type . ": " . $msg . " in " . $file . " on line " . $line ;

    exit;
}

set_error_handler('errorHandler', E_ALL);
echo $x;
