<?php
function removeTextAfterFirstComma($filename) {
  // Check if the file exists
  if (!file_exists($filename)) {
      echo "The file does not exist";
      return;
  }

  // Read the file into an array of lines
  $lines = file($filename);

  // Iterate over each line and remove the text after the first comma
  foreach ($lines as &$line) {
      $pos = strpos($line, ',');
      if ($pos !== false) {
          $line = substr($line, 0, $pos + 1) . PHP_EOL;
      }
  }

  // Write the modified lines back to the file
  file_put_contents($filename, implode('', $lines));
}
removeTextAfterFirstComma('ed.txt');
