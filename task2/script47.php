<!-- Write a PHP script that applies a user-defined function to all elements of an array using
the array_map() function. -->

<?php

function double($number) {
  return $number * 2;
}

$array = [1, 2, 3, 4, 5];
$new_array = array_map('double', $array);
print_r($new_array);

?>