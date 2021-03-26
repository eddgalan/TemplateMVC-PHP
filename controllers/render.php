<?php
  require 'models/usuario.php';

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
      $data['title'] = "TemplateMVC-PHP | Login";
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/login.php', $data);
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

  class Logout {
    function __construct($host_name="", $site_name="", $variables=null){
      $vista = new View();
      $vista->render('views/modules/logout.php');
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
      $this->view = new View();
      $this->view->render('views/modules/clientes.php', $data);
    }
  }

?>
