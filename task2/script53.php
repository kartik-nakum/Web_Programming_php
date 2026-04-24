<!-- Write a PHP script that removes duplicate values from an associative array using the
array_unique() function -->
<?php
$array=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($array));
?>