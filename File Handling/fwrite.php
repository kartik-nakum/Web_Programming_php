<?php
$file = fopen("mayank.txt", "w");

if ($file) {
    fwrite($file, "Hello Guys\n");
    fwrite($file, "How r u all???");

    fclose($file);
    echo "File written successfully.";
} else {
    echo "Unable to open the file.";
}
?>
