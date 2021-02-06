<?php
  require 'models/usuario.php';

  class Pruebas{
    function __construct(){
        $clientes = new Cliente();
        var_dump($clientes -> get_activos());
    }
  }

  class Login {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['titulo'] = $host_name;
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/login.php', $data);
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
      $data['titulo'] = 'PriceShop - Error';
      $vista = new View();
      $vista->render('views/modules/error.php');
    }
  }

  class Dashboard {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['titulo'] = 'PriceShop - Error';
      $vista = new View();
      $vista->render('views/modules/error.php', null, true);
    }
  }

?>
