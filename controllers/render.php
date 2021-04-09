<?php
  require 'models/usuario.php';
  require 'models/cliente.php';

  class Dashboard {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['title'] = "TemplateMVC-PHP | Dashboard";
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/dashboard.php', $data);
    }
  }

  class Profile {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['title'] = "TemplateMVC-PHP | Profile";
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/profile.php', $data);
    }
  }

  class Table {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['title'] = "TemplateMVC-PHP | Table";
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/table.php', $data);
    }
  }

  class Login {
    function __construct($host_name="", $site_name="", $variables=null){
      if($_POST){
        if(isset($_POST['username']) && isset($_POST['password'])) {
          $usr_name = $_POST['username'];
          $usr_pass = $_POST['password'];

          $usuario = new Usuario();

          if($usuario->validate_user($usr_name, $usr_pass)){
            $session = new UserSession();
            $session->set_session($usuario->get_userdata($usr_name));
            header("location: ./dashboard");
          }else{
            header("location: ./login");
          }
        }
      }else{
        $data['title'] = "Tarjetas de Lealtad | Login";
        $data['host'] = $host_name;
        $data['sitio'] = $site_name;
        $this->view = new View();
        $this->view->render('views/modules/login.php', $data);
      }
    }
  }

  class Logout{
    function __construct(){
      $session = new UserSession();
      $session->close_sesion();
      header("location: ./login");
    }
  }

  class Register {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['title'] = "TemplateMVC-PHP | Register";
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/register.php', $data);
    }
  }

  class ErrorURL {
    function __construct(){
      $data['title'] = 'Error 404';
      $vista = new View();
      $vista->render('views/modules/error.php');
    }
  }

  class Clientes{
    function __construct($host_name="", $site_name="", $variables=null){
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $data['title'] = "Listado de clientes";

      $cliente = new ClientePDO();
      $data['clientes'] = $cliente->get_clientes();

      $this->view = new View();
      $this->view->render('views/modules/clientes.php', $data);
    }
  }

  class Cliente{
    function __construct($host_name="", $site_name="", $variables=null){
      $data['host'] = $host_name;
      $data['sitio'] = $host_name;
      $data['title'] = 'Datos del cliente Cliente' . $variables[1];

      $data['dato_url'] = $variables[1];

      $this->view = new View();
      $this->view->render('views/modules/cliente.php', $data);

    }
  }

?>
