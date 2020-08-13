<?php
  require_once 'libs/log.php';
//  require_once 'models/usuario.php';

  class Pruebas{
    function __construct(){
        $clientes = new Cliente();
        var_dump($clientes -> get_activos());


    }
  }
  class Login {
    function __construct(){
      $data['titulo'] = 'PriceShop - Inicio de sesión';
      $this->view = new View();
      $this->view->render('views/modules/login.php', $data);
    }
  }

  class Logout {
    function __construct(){
      $vista = new View();
      $vista->render('views/modules/logout.php');
    }
  }

  class ErrorURL {
    function __construct(){
      $data['titulo'] = 'PriceShop - Error';
      $vista = new View();
      $vista->render('views/modules/error.php', $data);
    }
  }

?>
