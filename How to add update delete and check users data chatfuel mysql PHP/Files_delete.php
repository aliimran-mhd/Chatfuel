<?php

$messenger_id = $_GET['messenger_id'];
$fn = $_GET['messenger_id'] ."_data.json";


if(unlink($fn)){
 echo sprintf("The file %s deleted successfully",$fn);
 echo "<br>";
}else{
 echo sprintf("An error occurred deleting the file %s",$fn);
  echo "<br>";
}


?>
