

<?php
function greaterFn($num){
    if ($num > 30) {
      return "$num is greater than 30";
    } elseif ($num > 20) {
      return "$num is greater than 20";
    } elseif ($num > 10) {
      return "$num is greater than 10";
    } else {
      return "$num is less than or equal to 10";
    }
  }
  echo greaterFn(40); // Output: 40 is greater than 30
  echo greaterFn(21); // Output: 21 is greater than 20
  echo greaterFn(12); // Output: 12 is greater than 10
  echo greaterFn(8);  // Output: 8 is less than or equal to 10  
?>