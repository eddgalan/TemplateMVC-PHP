<?php
// Método que escribe en el archivo txt
function write_log($data_string){

  $nombre_archivo = date("Y-m-d"). ".log";
  $file_log = fopen('logs/'. $nombre_archivo,'a');
  fwrite($file_log, "===================================================================================================================================================\n");
  fwrite($file_log, "Hora: " . date("H:i:s") . "\n");
  fwrite($file_log, "ID Usuario: \n");
  fwrite($file_log, "Nombre Usuario: \n");
  fwrite($file_log, $data_string . "\n");
  fclose($file_log);

}

function get_idusr(){

}

function get_usrname(){

}


?>
