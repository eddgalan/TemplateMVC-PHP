<?php
  // include_once 'models/usuario.php';
  // include_once 'models/cliente.php';
  // include_once 'models/pedido.php';

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

  /* ..:: ClienteAPI | Realiza las operaciones con los clientes ::.. */
  class ClienteAPI extends API{
    // --- Hace el INSERT de un Cliente Nuevo ---
    public function insert_cliente(){
      if($_POST){
        write_log("POST Request - API INSERT Cliente");
        $this->datos['nombre'] = $_POST['nombre'];
        $this->datos['apellido_pat'] = $_POST['apellido_pat'];
        $this->datos['apellido_mat'] = $_POST['apellido_mat'];
        $this->datos['telefono'] = $_POST['telefono'];
        $this->datos['correo'] = $_POST['correo'];
        // Creamos una instancia de Cliente
        $cliente = new Cliente();
        if($cliente -> insert_cliente($this->datos)){
          $this->return_data("OK! Se realizó el INSERT", 201);
        }else{
          $this->return_data("NO se realizó el INSERT", 200);
        }
      }else{
        write_log("No se recibieron datos POST - ClienteAPI > insert_cliente");
        $this->return_data("No se recibieron datos POST", 200);
      }
    }

    // --- Hace el INSERT de un Cliente Nuevo ---
    public function update_cliente(){
      if($_POST){
        write_log("POST Request - API INSERT Cliente");
        $this->datos['id_cliente'] = $_POST['id_cliente'];
        $this->datos['estatus'] = $_POST['activo'];
        $this->datos['nombre'] = $_POST['nombre'];
        $this->datos['apellido_pat'] = $_POST['apellido_pat'];
        $this->datos['apellido_mat'] = $_POST['apellido_mat'];
        $this->datos['telefono'] = $_POST['telefono'];
        $this->datos['correo'] = $_POST['correo'];
        // Creamos una instancia de Cliente
        $cliente = new Cliente();
        if($cliente -> update_cliente($this->datos)){
          $this->return_data("OK! Se realizó el UPDATE", 200);
        }else{
          $this->return_data("NO se realizó el UPDATE", 200);
        }
      }else{
        write_log("No se recibieron datos POST - ClienteAPI > update_cliente");
        $this->return_data("No se recibieron datos POST", 200);
      }
    }


    // --- Regresa los clientes activos ---
    public function get_activos(){
      // Creamos una instancia de Cliente
      $cliente = new Cliente();
      // Consultamos los Clientes y los guardamos en $data
      $data = $cliente -> get_activos();
      print_r(json_encode($data));
    }

    // --- Realiza el cambio de estatus del cliente --
    public function cambiar_status(){
      if($_POST){
        write_log("POST Request - API Cambiar Estatus Cliente");
        $id_cliente = $_POST['id'];
        // Crea una instancia de Cliente
        $cliente = new Cliente();
        if($cliente -> cambiar_estatus($id_cliente)){
          $this->return_data("OK! Se realizó el UPDATE del estatus del cliente", 200);
        }else{
          $this->return_data("NO se realizó el UPDATE del cambio de estatus", 200);
        }

      }else{
        write_log("NO se recibieron datos POST");

      }
    }
  }


?>
