<?php
$file = fopen("mayank3.txt", "r");

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }

    fclose($file);
} else {
    echo "Error: Unable to open the file.";
}
?>
