<?php


/* Configuracion de las url en caso de Mac o Windows */
function getFolderProject(){
    if (strpos(__DIR__, '/') !== false) {
        $root = str_replace('/opt/lampp/htdocs/', '/', __DIR__);
      } else {
        $root = str_replace('C:\\xampp\\htdocs\\', '/', __DIR__);
      }
      $root = str_replace('config', '', $root);
      return $root;
}


?>