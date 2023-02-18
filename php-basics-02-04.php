<?php
function ArmstrongNumber($number) {
    $numDigits = strlen((string) $number);
    $sum = 0;
    $temp = $number;
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    return $sum == $number;
}

// Test the function with some numbers
echo ArmstrongNumber(153) ? "true" : "false"; // true
echo ArmstrongNumber(8208) ? "true" : "false"; // true
echo ArmstrongNumber(9475) ? "true" : "false"; // false
?>
