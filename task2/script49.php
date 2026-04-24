<!-- Develop a PHP script to split an array into chunks of a specified size using the
array_chunk() function -->
<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
?>