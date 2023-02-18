<?php
function wordToDigit($word) {
    switch ($word) {
        case "fivehundred":
            return 500;
        case "sparta":
            return 300;
        case "two":
            return 2;
        case "three":
            return 3;
        case "four":
            return 4;
        
        
    }
}

// Test the function with some words
echo wordToDigit("fivehundred"); // Output: 500
echo wordToDigit("sparta"); // Output: 300
echo wordToDigit("four"); // Output: 4
?>