<?php
$sports = array("Baseball", "Cricket", "Football", "Shooting");

$removed = array_shift($sports);
$removed = array_pop($sports);
print_r($sports);
echo "<br>";
var_dump($removed);
?>   