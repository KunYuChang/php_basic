<?php

$path = '/dir0/dir1/myfile.php';
$file = 'file1.txt';

// Return filename
echo basename($path);

// Return filename without ext
echo basename($path, '.php');

// Return the dir name from path
echo dirname($path);

// Check if file exists
echo file_exists($file);

// Get abs path
echo realpath($file);

// Check if writeable
echo is_writable($file);

// Check if writeable
echo is_readable($file);

// Get file size
echo filesize($file);

// Create a directory
mkdir('test');

// Remove dir if empty
rmdir('test');

// Copy file
echo copy('file1.txt', 'file2.txt');

// ReName file
rename('file2.txt', 'myfile.txt');

// Delete file
unlink('myfile.txt');

// 讀取檔案
echo file_get_contents($file);

// 寫入檔案
echo file_put_contents($file, 'Goodbye World');

// Open File For Reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
$fclose($handle);

// Open file for writing
$handle = fopen($file, 'w');
$txt = 'John Doe';
fwrite($handle, $txt);
fclose($handle);
