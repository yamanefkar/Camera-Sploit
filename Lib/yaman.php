<?php 

$dizin = opendir('lib');
while($dosya = readdir($dizin)) {
   echo $dosya . ' <br/>';
}

 ?>
