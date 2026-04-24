<?php
$file = fopen("newfile.txt", "x");

if ($file) {
    
    fwrite($file, "This file was created with 'x' mode to ensure it's a new file.\n");

    fclose($file);
    echo "File created and written to successfully.";
} else {
    echo "The file already exists and cannot be overwritten.";
}
?>
