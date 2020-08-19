<!DOCTYPE html>
<html>
<head>
  <?php
    if(isset($data['titulo'])){
      echo '<title>' . $data['titulo'] . '</title>';
    }else{
      echo '<title>PriceShop - ¡Error 404! </title>';
    }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scale=no">
	<meta name="title" content="PriceShop">

  <!-- jQuery -->
  <script type="text/javascript" src="/PriceShop/views/assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/PriceShop/views/assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/PriceShop/views/assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/PriceShop/views/assets/js/mdb.min.js"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

  <link rel="stylesheet" type="text/css" href="/PriceShop/views/css/style.css">
  <link rel="stylesheet" type="text/css" href="/PriceShop/views/css/login.css">
  <link rel="stylesheet" type="text/css" href="/PriceShop/views/css/main.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/PriceShop/views/assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/PriceShop/views/assets/css/mdb.min.css">
</head>
