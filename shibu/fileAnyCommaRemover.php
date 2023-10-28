<?php
function removeCommas($filename) {
    // Check if the file exists
    if (!file_exists($filename)) {
        echo "The file does not exist";
        return;
    }

    // Read the file content
    $content = file_get_contents($filename);

    // Remove all commas
    $contentWithoutCommas = str_replace(',', '', $content);

    // Write the modified content back to the file
    file_put_contents($filename, $contentWithoutCommas);
}
removeCommas('ed.txt');
