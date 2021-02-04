<?php
  /* ..:: Imports Principales ::.. */
  require 'libs/view.php';
  require 'libs/rutas.php';
  require 'libs/log.php';

  $host_name = "http://localhost/Nombre_sitio/";
  $site_name = "Nombre Sitio";

  $app = new Rutas($host_name, $site_name);
?>
