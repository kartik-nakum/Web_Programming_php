<!-- Develop a PHP script that uses the array_push() function to add elements to an array and
the array_pop() function to remove elements from the end -->
<?php
$array = array("orange", "banana", "apple", "cherry","kiwi");
  array_pop($array);
 array_push($array,"papaya");
print_r($array);
?>