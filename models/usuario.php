<?php
  require_once 'libs/conexion_db.php';

  /* === MODELO | Usuario | MAJEJO Y OPERACIONES DEL USUARIO === */
  Class Usuario extends MySQL_Object{
    private $usr_id;
    private $usr_name;
    private $usr_status;
    private $usr_type;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $fecha_alta;

    function __construct() {
      parent::__construct();  // Llama a la función del contructor de la Clase Padre
    }

    // Valida el usuario y coloca los datos del usuario
    public function valida_usr($usr_name, $usr_pass){
      // Conectamos a la BD
      $this->conectar();
      // Consultamos el usuario y lo guardamos en una variable $usuario
      $sql_select = "SELECT * FROM usuario WHERE Usuario = '$usr_name' AND Contraseña = '$usr_pass'";
      $usuario = $this->conn->query($sql_select);
      // Nos desconectamos de la BD
      $this->desconectar();
      //Si el número de rows es > 0 quiere decir que encontró un usuario
      if ($usuario->num_rows > 0) {
          $user_data = $usuario->fetch_all();
          $datos = [];
          foreach ($user_data as $usr){
            $this->usr_id = $usr[0];
            $this->usr_name = $usr[1];
            $this->usr_pass = $usr[2];
            $this->nombre = $usr[3];
            $this->apellido_paterno = $usr[4];
            $this->apellido_materno = $usr[5];
            $this->usr_status =$usr[6];
            $this->usr_type = $usr[7];
            $this->fecha_alta = $usr[8];
          }
          return true;
      }else{
        return false;
      }
    }

    //Consulta los usuarios en la BD en función a usuario y contraseña
    function consultar_usuarios($usuario, $contraseña){
      $sql_select = "SELECT * FROM usuario WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";
      $sql = $this->conn->query($sql_select);
      //Si el número de rows es > 0 quiere decir que encontró un usuario
      if ($sql->num_rows > 0) {
          //var_dump($sql->fetch_all());
          $usuario = $sql->fetch_all();
          $datos = [];
          foreach ($usuario as $usr){
            $array_usuario = [];
            $array_usuario['id'] = $usr[0];
            $array_usuario['usrname'] = $usr[1];
            $array_usuario['pass'] = $usr[2];
            $array_usuario['nombre'] = $usr[3];
            $array_usuario['apellido_paterno'] = $usr[4];
            $array_usuario['apellido_materno'] = $usr[5];
            $array_usuario['estatus'] = $usr[6];
            $array_usuario['tipo'] = $usr[7];
            $array_usuario['fecha_alta'] = $usr[8];
            array_push($datos, $array_usuario);
          }
          return $datos;
      } else {
        // Regresa 'false' si no encontró un usuario
        return false;
      }
    }

    // Función que coloca los datos del usuario
    public function set_datos_usuario($datos){
      $this->usr_id = $datos['usr_id'];
      $this->usr_name = $datos['usr'];
      $this->usr_status = $datos['usr_status'];
      $this->usr_type = $datos['usr_type'];
      $this->nombre = $datos['usr_name'];
      $this->apellido_paterno = $datos['usr_ap_paterno'];
      $this->apellido_materno = $datos['usr_ap_materno'];
      $this->fecha_alta = $datos['usr_fecha_alta'];
    }

    // Función que regresa los datos del usuario
    public function get_datos_usuario(){
       $datos['usr_id'] = $this->usr_id;
       $datos['usr_name'] = $this->usr_name;
       $datos['usr_pass'] = $this->usr_pass;
       $datos['usr_status'] = $this->usr_status;
       $datos['usr_type'] = $this->usr_type;
       $datos['nombre'] = $this->nombre;
       $datos['apellido_paterno'] = $this->apellido_paterno;
       $datos['apellido_materno'] = $this->apellido_materno;
       $datos['fecha_alta'] = $this->fecha_alta;
       return $datos;
    }

  }


  /* === MODELO | UsrSession | MANEJO DE LA SESIÓN === */
  Class UsrSession{
    // Contructor
    public function __construct(){
      session_start();  // Inicia la sesión
    }

    // Coloca los datos de la sesión
    public function set_sesion_actual($datos_usuario){
      $_SESSION['usr_id'] = $datos_usuario['usr_id'];
      $_SESSION['usr'] = $datos_usuario['usr_name'];
      $_SESSION['usr_status'] = $datos_usuario['usr_status'];
      $_SESSION['usr_type'] = $datos_usuario['usr_type'];
      $_SESSION['usr_name'] = $datos_usuario['nombre'];
      $_SESSION['usr_ap_paterno'] = $datos_usuario['apellido_paterno'];
      $_SESSION['usr_ap_materno'] = $datos_usuario['apellido_materno'];
      $_SESSION['usr_fecha_alta'] = $datos_usuario['fecha_alta'];
    }

    // Obtener datos de la sesión
    public function get_datos_sesion(){
      $datos_sesion['usr_id'] = $_SESSION['usr_id'];
      $datos_sesion['usr'] = $_SESSION['usr'];
      $datos_sesion['usr_status'] = $_SESSION['usr_status'];
      $datos_sesion['usr_type'] = $_SESSION['usr_type'];
      $datos_sesion['usr_name'] = $_SESSION['usr_name'];
      $datos_sesion['usr_ap_paterno'] = $_SESSION['usr_ap_paterno'];
      $datos_sesion['usr_ap_materno'] = $_SESSION['usr_ap_materno'];
      $datos_sesion['usr_fecha_alta'] = $_SESSION['usr_fecha_alta'];
      return $datos_sesion;
    }

    // Limpia y elimina la sesión
    public function close_sesion(){
      session_unset();  // Limpia
      session_destroy();  // Elimina
    }
  }
?>
