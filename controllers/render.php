<?php
  require_once 'libs/log.php';
//  require_once 'models/usuario.php';

  class Inicio {
    function __construct(){
      $data['titulo'] = 'Página de Inicio';
      $this->view = new View();
      $this->view->render('views/modules/inicio.php', $data);
    }
  }

  class Dashboard {
    function __construct(){
      $data['titulo'] = 'Página de Inicio';
      $this->view = new View();
      $this->view->render('views/modules/dashboard.php', $data, true);
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
