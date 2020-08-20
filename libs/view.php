<?php
  include_once 'models/usuario.php';


  class View{
    function render($nombre, $data=null, $require_login=false){
      // Creamos una instancia de UsrSession | usuario.php
      $sesion_usuario = new UsrSession();
      // Generamos una intancia Usuario | usuario.php
      $usuario = new Usuario();
      // Valida si se requiere estar logueado para mostrar la página
      if($require_login){
          // Validamos si hay una sesión iniciada
          if(isset($_SESSION['usr_id'])){
            write_log("Sesión Activa");
            // Colocamos los datos de la sesión actual al modelo usuario
            $usuario->set_datos_usuario( $sesion_usuario->get_datos_sesion() );

            if ($nombre == 'views/modules/login.php'){
              header('location: /dashboard');
            }else{
              include_once $nombre;   // Aquí es donde se carga la vista de la página
            }

          }else{
            write_log("No hay sesión - Redirigiendo a login");
            header('location: http://localhost//nombre_carpeta/login');     // Poner a qué dirección se desea redirigir si no hay sesión
            // $data['titulo'] = "Login";
            // include_once 'views/modules/login.php';
          }
      }else if(isset($_POST['usr_name']) && isset($_POST['usr_pass'])){
        write_log("Haciendo POST en LOGIN");
        // Agarramos las variables del formulario
        $usr_name = $_POST['usr_name'];
        $usr_pass = $_POST['usr_pass'];

        // Validamos que el usuario y contraseña sean correctos (La función valida_usr regresa el valor bool)
        if($usuario->valida_usr($usr_name, $usr_pass)){
          // Colocamos la sesión actual del usuario
          $sesion_usuario->set_sesion_actual($usuario->get_datos_usuario());
          // Redireccionamos a la página 'principal'
          header('location: /dashboard');
        }else{
          // Ponemos el mensaje de error
          $errorLogin = 'Usuario y/o contraseña incorrecta.';
          // 'Mostramos' a la página de inicio de sesión
          $data['titulo'] = 'Login';
          include_once 'views/modules/login.php';
        }
      }else{
          write_log("NO requiere login");
          include_once $nombre;   // Aquí es donde se carga la vista de la página
      }
    }
  }
?>
