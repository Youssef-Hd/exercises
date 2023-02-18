<?php
$num = '54321';
$sum = 0;

// Loop through each digit of the string and add it to the sum
for ($i = 0; $i < strlen($num); $i++) {
    $sum += $num[$i];
}

// Output the sum of the digits
echo " $num is equal to $sum.";
?>
