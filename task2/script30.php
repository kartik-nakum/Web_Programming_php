<!-- Create a PHP script that removes duplicate values from an array using the array_unique()
function -->

<?php
$array=array("a"=>"apple","b"=>"mango","c"=>"apple","d"=>"bananan");
print_r(array_unique($array));
?>