<?php
$inputString = "This is a Python string. Another Python string.";
$outputString = str_replace("Python", "PHP", $inputString);
$outputString = str_replace("Python ", " PHP ", $outputString);

echo $outputString;
?>