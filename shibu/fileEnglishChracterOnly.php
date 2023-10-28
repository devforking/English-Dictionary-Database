<?php
function filterEnglishCharactersOnly($filename) {
    // Check if the file exists
    if (!file_exists($filename)) {
        echo "The file does not exist";
        return;
    }

    // Read the file into an array of lines
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Filter lines to keep only those containing English alphabets
    $filteredLines = array_filter($lines, function ($line) {
        return preg_match('/^[a-zA-Z]+$/', $line);
    });

    // Write the filtered lines back to the file
    file_put_contents($filename, implode(PHP_EOL, $filteredLines) . PHP_EOL);
}
filterEnglishCharactersOnly('ed.txt');
