<?php 
echo readfile('Task 2 PHP\note.txt');

// r untuk read file
$file = fopen('Task 2 PHP\note.txt','r') or die('File not found');
echo fread($file, filesize('Task 2 PHP\note.txt'));
fclose($file);

// w untuk write file
$file = fopen('Task 2 PHP\note.txt','w') or die('File not found');
$kata = "Tambahan kata";
fwrite($file, $kata);
fclose($file);