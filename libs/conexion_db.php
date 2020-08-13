<?php
  class MySQL_Object{
    /* ...:: PROPIEDADES ::... */
    Protected $servername;
    Protected $username;
    Protected $password;
    Protected $sqldatabase;
    Protected $conn;

    /* ...:: MÉTODOS ::... */
    function __construct() {
      $this->servername = "";
      $this->username = "";
      $this->password = "";
      $this->sqldatabase = "";
    }
    //Conectar a la BD
    function conectar() {
      //Conectamos a la BD
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->sqldatabase);
      // Check connection
      if ($this->conn->connect_error) {
        write_log("ERROR al conectar a la BD: '" . $this->conn->connect_error ."'");
        die("Connection failed: " . $this->conn->connect_error);
      }
    }

    //Desconectar de la BD
    function desconectar(){
      $this->conn->close();
    }
  }
?>
