<?php
  /* ..:: Imports Principales ::.. */
  require 'controllers/rutas.php';
  require 'libs/view.php';
  include 'libs/log.php';

  $host_name = "http://localhost/subdominio/";
  $site_name = "My Web Site";

  $app = new Rutas($host_name, $site_name);
?>
