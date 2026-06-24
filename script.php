<?php
$filename = 'path/to/counter.txt'; 
if (is_writable($filename)) {
    $count = file_get_contents($filename);
    $count = trim($count);
    $count++;
    file_put_contents($filename, $count);
    echo $count;
} else {
    echo "Error: Unable to write to file.";
}
?>

