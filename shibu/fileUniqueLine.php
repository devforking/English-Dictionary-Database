<?php
function removeDuplicateEntries($filename) {
    // Check if the file exists
    if (!file_exists($filename)) {
        echo "The file does not exist";
        return;
    }

    // Read the file into an array of lines
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Remove duplicate lines
    $uniqueLines = array_unique($lines);

    // Write the unique lines back to the file
    file_put_contents($filename, implode(PHP_EOL, $uniqueLines) . PHP_EOL);
}
removeDuplicateEntries('ed.txt');
