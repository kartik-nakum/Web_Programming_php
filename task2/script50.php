<!-- Write a PHP script to filter the elements of an array based on a specified condition using
the array_filter() function. -->
<?php
function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4,5);
print_r(array_filter($a1,"test_odd"));
?>