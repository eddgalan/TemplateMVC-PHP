<?php
  /* ..:: Imports Principales ::.. */
  require 'libs/view.php';
  require 'libs/rutas.php';
  include 'libs/log.php';

  $host_name = "http://localhost/PuntoDeVenta/";
  $site_name = "Punto de Venta";

  $app = new Rutas($host_name, $site_name);
?>
