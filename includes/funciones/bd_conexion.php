<?php
$db = new  mysqli('localhost', 'root', '', 'gdlwebcamp') ;

if($db -> connect_error){
  echo $error -> $db->connect_error;
}
if (!$db->set_charset("utf8")) {
    printf("Error cambiando el juego de caracteres utf8: %s\n", $db->error);
}
?>
