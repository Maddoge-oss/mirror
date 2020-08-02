<?php 

   $data_file = fopen("example.txt", "w");
   $confession = $_POST[""];
   $text_to_write = $confession;

   fwrite($data_file, $text_to_write);
   fclose($data_file)
?>