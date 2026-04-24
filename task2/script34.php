<!-- Develop a PHP script to check if a specific value exists in an array using the in_array()
function. -->
<?php
$array=array("red","yellow","green","blue");
if (in_array("red",$array))
  {
  echo "color found";
  }
else
  {
  echo "color not found";
  }
?>