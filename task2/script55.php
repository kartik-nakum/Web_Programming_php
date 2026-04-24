<!-- Develop a PHP script that uses the array_key_first() and array_key_last() functions to
retrieve the first and last keys of an array -->
<?php 
  
$arr = array(); 
  
var_dump(array_key_last($arr)); 
  
$arr1 = array("10", "20", "30", "40", "50"); 
var_dump(array_key_last($arr1)); 
  
?>

<?php 
  
$arr = array(); 
  
var_dump(array_key_first($arr)); 
  
$arr1 = array("10", "20", "30", "40", "50"); 
var_dump(array_key_first($arr1)); 
  
?>