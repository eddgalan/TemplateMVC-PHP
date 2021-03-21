<?php
  require 'models/usuario.php';

  class Dashboard {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $data['titulo'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/dashboard.php', $data);
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

  class Profile {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['titulo'] = $host_name;
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/profile.php', $data);
    }
  }

  class Register {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['titulo'] = $host_name;
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/register.php', $data);
    }
  }

  class Table {
    function __construct($host_name="", $site_name="", $variables=null){
      $data['titulo'] = $host_name;
      $data['host'] = $host_name;
      $data['sitio'] = $site_name;
      $this->view = new View();
      $this->view->render('views/modules/table.php', $data);
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

?>
