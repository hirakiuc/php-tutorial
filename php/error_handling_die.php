<?php
$fpath = getcwd() . '/test.txt';
if (!file_exists($fpath)) {
    die("File not found");
} else {
    $file = fopen($fpath, 'r');
    print "Opened file successfully";
}
// Test of the code here.
