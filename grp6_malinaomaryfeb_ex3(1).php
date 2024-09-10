<?php
$filename = "grp6_malinaomaryfeb_ex3.txt";

function readFileContents($filename) {
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        echo "File Contents: <br>" . nl2br($content) . "<br><br>";
    } else {
        echo "File does not exist.<br><br>";
    }
}

function writeFileContents($filename, $data) {
    $bytes_written = file_put_contents($filename, $data);
    if ($bytes_written !== false) {
        echo "Successfully wrote $bytes_written bytes to the file.<br><br>";
    } else {
        echo "Failed to write to the file.<br><br>";
    }
}

function checkFileExists($filename) {
    if (file_exists($filename)) {
        echo "File '$filename' exists.<br><br>";
    } else {
        echo "File '$filename' does not exist.<br><br>";
    }
}

function readFileAsArray($filename) {
    if (file_exists($filename)) {
        $file_array = file($filename, FILE_IGNORE_NEW_LINES);
        echo "File lines as array:<br>";
        foreach ($file_array as $line) {
            echo $line . "<br>";
        }
        echo "<br>";
    } else {
        echo "File does not exist.<br><br>";
    }
}

$data = "Hello, this is an example.\nWelcome to the file!";
checkFileExists($filename); 
writeFileContents($filename, $data); 
readFileContents($filename); 
readFileAsArray($filename); 

?>