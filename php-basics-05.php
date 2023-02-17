<?php
$course_name = "Equestrianism";
$enrolled_students = 3;
$price = 120;
$currency = "USD";
$on_discount = True;

$Equestrianism = "Course title:$course_name<br>
                  Enrolled students:$enrolled_students<br>
                  Price:$price $currency<br>
                  ";

echo $Equestrianism;
echo "Course on discount: " . ($on_discount ? "Yes" : "No");
?>








