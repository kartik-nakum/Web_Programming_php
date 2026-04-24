<!-- Write a PHP script that finds the intersection of two arrays using the array_intersect()
function. -->
<?php
$array1=array("red","green","blue","yellow");
$array2=array("blue","pink","red","green");

$result=array_intersect($array1,$array2);
print_r($result);
?>