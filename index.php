<?php
  /* ..:: Imports Principales ::.. */
  require 'controllers/routes.php';
  require 'libs/view.php';
  include 'libs/log.php';

  $host_name = "http://dev.mydominio.com";
  $site_name = "My Web Site";

  $app = new Routes($host_name, $site_name);
?>
