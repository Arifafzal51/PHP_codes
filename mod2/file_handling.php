<?php

$myfile = fopen("test.txt", "r") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
echo $myfile;0
//fclose($myfile);
?>