<?php
	/* ..:: INCLUDE DE LOS MODELOS ::..*/
  include_once 'models/usuario.php';

  class API{
    private $datos=[];      // Arreglo para guardar datos para mandar a los modelos o funciones
    private $response=[];   // Guarda la respuesta que se regresará a la petición

    public function return_data($msg, $code, $data=null){
      $this->response['code'] = $code;
      $this->response['msg'] = $msg;
      $this->response['data'] = $data;
      print_r(json_encode($this->response));
    }
  }
  
?>
