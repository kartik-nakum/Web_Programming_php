<!-- Write a PHP script to extract the values from an associative array using the array_values()
function -->

<?php

$assocArray = array("name" => "kartik","age" => 20,"city" => "rajkot");

$values = array_values($assocArray);
print_r($values);
?>