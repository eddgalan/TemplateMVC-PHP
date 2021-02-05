<?php

  class API{
    private $datos=[];      
    private $response=[];   

    public function return_data($msg, $code, $data=null){
      $this->response['code'] = $code;
      $this->response['msg'] = $msg;
      $this->response['data'] = $data;
      print_r(json_encode($this->response));
    }
  }

  class UsuarioAPI extends API{
    public function get_users(){
      write_log("API | get_users");
      $usuario = new Usuario();
      $usuarios = $usuario-> get_users();
      if($usuarios){
        $this -> return_data("Mostrando Usuarios", 200, $usuarios);
      }else{
        $this -> return_data("NO se encontraron registros o hubo algún error", 200);
      }
    }
  }

?>
