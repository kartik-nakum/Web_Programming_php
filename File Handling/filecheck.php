<?php
$file = 'mayank3.txt';

if (file_exists($file)) {
    echo "The file $file exists.";
} else {
    echo "The file $file does not exist.";
}
?>
