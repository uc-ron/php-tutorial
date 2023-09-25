<?php

declare(strict_types=1);
// echo "<pre>";
echo "<br>";
echo "****** CLASS & OBJECT in PHP *******";
echo "<br>";
require_once '../Transaction.php';
// $transaction = new Transaction(100,"Transaction 1");
// $transaction->addTax(8);
// $transaction->appltDiscount(10);
$amount = (new Transaction(100, "Transaction 1"))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

// $transaction->amount=10;

var_dump($amount);
