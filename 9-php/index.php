<?php

echo "<pre>";
echo "<br>";
echo "*************ARRAYS in PHP****************";
echo "<br>";
echo "<br>";
$programmingLanguages = ['java', 'php', 'C#'];
$programmingLanguages[1] = "C++";

$programmingLanguages[] = "JavaScript";
array_push($programmingLanguages, "C", "React");
// $programmingLanguages = array('java', 'php', 'C#');

echo $programmingLanguages[0]; //echo $programmingLanguages[-1]; ->  invalid
echo "<br>";
var_dump(isset($programmingLanguages[1]));

echo "<br>";
print_r($programmingLanguages);
echo "<br>";
echo "Count -> " . count($programmingLanguages);

$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

$programmingLanguages['JavaScript'] = '9.1';
echo "<br>";
print_r($programmingLanguages);


$programmingLanguages = [
    'php' => [
        'creator' => 'Some Creator',
        'extention' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Jan 25, 2019']
        ],
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extention' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Jan 25, 2019']
        ],
    ]
];
$programmingLanguages['JavaScript'] = '9.1';
echo "<br>";
print_r($programmingLanguages);
echo "<br>";
print_r($programmingLanguages['php']['website']);
echo "<br>";
print_r($programmingLanguages['python']['versions'][0]['releaseDate']);

$array = ['a', 50 => 'b', 'key' => 'c', 'd', 'e'];
echo "<br>";
print_r($array);
unset($array['key'], $array[0]);
echo "<br>";
var_dump(array_key_exists('50', $array));
echo "<br>";
print_r($array);
array_pop($array); // e
array_shift($array); // a
echo "<br>";
print_r($array);
