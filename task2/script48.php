<!-- Create a PHP script that uses the array_reduce() function to apply a callback function to
the elements of an array and return a single value. -->
<?php
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$array=array("Dog","Cat","Horse");
print_r(array_reduce($array,"myfunction"));
?>