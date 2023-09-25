<?php

include 'helper.php';
echo "<pre>";
echo "<br>";
echo "****** Array advanced in PHP ******";
echo "<br>";

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 5];
prettyPrintArray(array_chunk($items, 2, true));
prettyPrintArray(array_keys($items, '5'));

$arr1 = ['a', 'b', 'c'];
$arr2 = [5, 10, 15];

prettyPrintArray(array_combine($arr1, $arr2));

$arr = [1, 0, 3, [], 5, null, 7, 8, 9, 10];
// $even = array_filter($arr, fn ($num, $key) => $num % 2 === 0, ARRAY_FILTER_USE_BOTH);
$even = array_filter($arr);
// $even = array_values($even);
prettyPrintArray($even);


$arr = array_map(fn ($num) => $num * 3, $arr2);
prettyPrintArray($arr);


$invoices = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'item 5'],
];

$total = array_reduce(
    $invoices,
    fn ($sum, $item) => $sum + $item['qty'] * $item['price'],
    500
);

echo $total;
