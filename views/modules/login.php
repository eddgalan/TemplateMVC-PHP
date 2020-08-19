<?php
  include "views/modules/plantilla.header.php";
?>
<body>
  <!-- NAVBAR style="background-color: #3D9FFC;" -->

  <!-- INICIO DE SESION -->
  <div class="container-fluid div_main">
    <div class="row h-100">
      <!-- Formulario login -->
      <div class="col-md-5 mx-auto">
        <div class="col-md-8 mx-auto" style="margin-top:110px;">
          <div class="card col-md-12" style="padding:20px;">
            <div class="card-body">
              <div class="col-md-12 text-center" style="margin-bottom:20px;">
                <img src="/PriceShop/views/assets/img/AlphaTeamWorkLogo-00.png" class="img-fluid">
              </div>
              <!-- ..:: Formulario ::.. -->
              <form action="" method="post">
                <div class="form-group">
                    <label for="username">Usuario: </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i class="fa fa-user"></i>
                          </div>
                      </div>
                      <input type="text" name="usr_name" class="form-control" placeholder="Nombre de usuario" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Contraseña: </label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <div class="input-group-text">
                                  <i class="fa fa-lock"></i>
                              </div>
                          </div>
                          <input type="password" name="usr_pass" class="form-control" placeholder="Contraseña" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" id="btn_login" class="btn btn-primary" tabindex="4">
                      Iniciar sesión
                  </button>
                </div>
                <?php
                  if(isset($errorLogin)){
                    echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error</strong> '.  $errorLogin .'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
                  }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
