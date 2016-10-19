<?php
$file = fopen("./me.txt", "r");

while(! feof($file)) //echo all contents in the file
  {
  echo fgets($file). "<br />"; // echo one line and new line
  }

fclose($file);
?>