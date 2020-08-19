<?php
  // Finalizamos la sesión del usuario
  $sesion_usuario->close_sesion();
  // Redirecciona a la página de login
  header('location: /login');
?>
