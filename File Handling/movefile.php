<?php
$source = 'mayank.txt';
$destination = 'D:/mayank.txt';

if (rename($source, $destination)) {
    echo "The file has been moved successfully.";
} else {
    echo "Failed to move the file.";
}
?>
