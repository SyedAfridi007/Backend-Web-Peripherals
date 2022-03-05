<?php
$myfile = fopen("info.txt","r") or die ("unable to open file");
echo fread($myfile,filesize("info.txt"));
fclose($myfile);
Fgets($myfile);
fgets($myfile);
?>