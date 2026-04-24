<!-- Develop a PHP script to remove and replace elements from an array using the
array_splice() function. -->
<?php
         $array1=array("red","green","pink","oreage","blue","silver");
         $array2=array("yellow","purple");
         array_splice($array1,2,2,$array2);
         print_r($array1);
?>