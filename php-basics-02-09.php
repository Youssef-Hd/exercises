<?php
function squareRoot($n) {
    if ($n < 0) {
        return "Invalid input"; // square root of a negative number is not defined
    }

    $x = $n; // initial guess for square root
    $y = 1; // initial value for y

    while ($x - $y > 0.000001) {
        $x = ($x + $y) / 2;
        $y = $n / $x;
    }

    return $x;
}

// Test the function with some numbers
echo squareRoot(16); // Output: 4
echo squareRoot(2); // Output: 1.4142135623731 (approximate value)
echo squareRoot(-1); // Output: Invalid input
?>