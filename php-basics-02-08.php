<?php
function isPowerOfTwo($n) {
    if ($n <= 0) {
        return false; // a negative or zero number is not a power of two
    }

    while ($n > 1) {
        if ($n % 2 != 0) {
            return false; // if the number is not divisible by 2, it's not a power of two
        }
        $n /= 2;
    }
    return true; // the number is a power of two
}

// Test the function with some numbers
echo isPowerOfTwo(16) ? "Yes" : "No"; // Output: Yes
echo isPowerOfTwo(32) ? "Yes" : "No"; // Output: Yes
echo isPowerOfTwo(15) ? "Yes" : "No"; // Output: No
?>