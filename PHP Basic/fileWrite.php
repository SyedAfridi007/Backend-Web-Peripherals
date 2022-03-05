<?php
 $myfile = fopen("newfile.txt","w") or die (" unable to open");
 $txt = ("Mirpur-1, Dhaka 1216");
 fwrite($myfile, $txt);
 fclose($myfile);
?>


