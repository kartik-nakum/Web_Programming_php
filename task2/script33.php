<!-- Create a PHP script to check if a specific key exists in an associative array using the
array_key_exists() function. -->
<?php
$array=array("red"=>"XC90","green"=>"X5","yellow"=>"blue","pink"=>"k90");
if (array_key_exists("red",$array))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>