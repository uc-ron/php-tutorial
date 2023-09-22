<?php

echo "<pre>";
echo "<br>";
echo "********* match in php ***********";
echo "<br>";
echo "<br>";

$paymentStatus = '1';

$paymentStatusDisplay = match ($paymentStatus) {
    1 => 'PAID',
    2, 3 => 'PAYMENT DECLINED',
    0 => 'PENDING PAYMENT',
    default => 'UNKNOWN PAYMENT STATUS'
};

echo $paymentStatusDisplay;
