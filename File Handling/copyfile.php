<?php
$source = 'mayank.txt';
$destination = 'mayank3.txt';

if (copy($source, $destination)) {
    echo "The file has been copied successfully.";
} else {
    echo "Failed to copy the file.";
}
?>
