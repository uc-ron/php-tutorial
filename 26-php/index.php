<?php

echo "<pre>";
echo "<br>";
echo "****** Working with File System in PHP ******";
echo "<br>";
echo "<br>";
$dir = scandir(__DIR__);

var_dump($dir);
var_dump(is_file($dir[2]));

// mkdir('foo');
// rmdir('foo');

if (file_exists('foo.txt')) {
    echo filesize('foo.txt');
    // echo "<br>";
    // file_put_contents('foo.txt', 'Hello World');
    // clearstatcache();
    // echo filesize('foo.txt');
} else {
    echo "File Not Found";
}

echo "<br>";
echo "<br>";

$file = fopen('foo.txt','r');
while(($line = fgets($file)) !== false){
    echo $line ;
}
fclose($file);

echo "<br>";
$content = file_get_contents('foo.txt', offset:3, length:2);
echo $content;
file_put_contents('bar.txt', 'I am Bar');

unlink('bar.txt');

rename('foo.txt','bar.txt');