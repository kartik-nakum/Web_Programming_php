<!-- Create a PHP script that flips the keys and values of an associative array using the
array_flip() function. -->

<?php 
function Flip($array) 
{ 
    $result = array_flip($array); 
    return($result); 
} 
  
$array = array("nakum" => "kartik", "rathod" => "hemanshu",  
               "kupal" => "nakum", "rathod" => "rani"); 
print_r(Flip($array)); 
  
?>