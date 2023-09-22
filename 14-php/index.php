<?php

echo "<pre>";
echo "<br>";
echo "********* SWITCH AND IF_ELSE in PHP";
echo "<br>";
echo "<br>";

$paymentStatuses = ['declined', 'paid', 'something', 'pending'];

foreach ($paymentStatuses as $paymentStatus) {

    switch ($paymentStatus) {
        case 'paid':
            echo 'PAID';
            break;
        case 'declined':
        case 'rejected':
            echo 'DECLINED/REJECTED';
            break;
        case 'pending':
            echo 'PENDING';
            break;
        default:
            echo 'UNKNOWN PAYMENT STATUS! ';
            continue 2;
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

function x()
{
    sleep(3);

    echo "Done<br>";
    return 3;
}

if (x() === 1) {
    echo 1;
} elseif (x() === 2) {
    echo 2;
} elseif (x() === 3) {
    echo 3;
} else {
    echo 4;
}
