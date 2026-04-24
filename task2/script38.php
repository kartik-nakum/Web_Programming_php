<!-- Write a PHP script to use the array_shift() function to remove an element from the
beginning of an array and the array_unshift() function to add elements at the beginning. -->
<?php
$array=array("red","green","yellow","blue","orage");
array_unshift($array,"blue");
array_shift($array);
print_r($array);
?>
