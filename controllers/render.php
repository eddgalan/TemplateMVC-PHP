<?php
  require_once 'libs/log.php';
  require_once 'models/usuario.php';
  require_once 'models/cliente.php';
  require_once 'models/proveedor.php';
  require_once 'models/marca.php';
  require_once 'models/catalogo.php';
  require_once 'models/tipo_articulo.php';
  require_once 'models/pedido.php';

  class Pruebas{
    function __construct(){

        /*
        $usuario="Edson";
        $contraseña="Vector123";

        $usr = new Usuario();
        $usr->conectar();
        var_dump( $usr->valida_usr($usuario, $contraseña) );
        */

        $clientes = new Cliente();
        var_dump($clientes -> get_activos());


    }
  }
  class Login {
    function __construct(){
      $data['titulo'] = 'PriceShop - Inicio de sesión';
      $this->view = new View();
      $this->view->render('views/modules/login.php', $data);
    }
  }

  class Logout {
    function __construct(){
      $vista = new View();
      $vista->render('views/modules/logout.php');
    }
  }

  class ErrorURL {
    function __construct(){
      $data['titulo'] = 'PriceShop - Error';
      $vista = new View();
      $vista->render('views/modules/error.php', $data);
    }
  }

  class Abonos {
    function __construct(){
      $data['titulo'] = 'PriceShop - Abonos';
      $vista = new View();
      $vista->render('views/modules/abonos.php',$data);
    }
  }

  class AltaCliente {
    function __construct(){
      $data['titulo'] = 'PriceShop - Alta de cliente';
      $vista = new View();
      $vista->render('views/modules/cliente_alta.php', $data);
    }
  }

  class EditarCliente {
    function __construct($variables){
      $data['titulo'] = 'PriceShop - Editar Cliente';
      // Traemos los datos del Cliente
      $cliente = new Cliente();
      $data['cliente'] = $cliente -> get_datos_cliente($variables[1]);

      $vista = new View();
      $vista->render('views/modules/cliente_editar.php', $data);
    }
  }

  class Administrar {
    function __construct(){
      $data['titulo'] = 'PriceShop - Administrar';
      $vista = new View();
      $vista->render('views/modules/administrar.php', $data);
    }
  }

  class Clientes {
    function __construct(){
      $data['titulo'] = 'PriceShop - Clientes';
      // Traemos TODOS los Clientes
      $clientes = new Cliente();
      $data['clientes'] = $clientes -> get_all();
      $vista = new View();
      $vista->render('views/modules/clientes.php', $data);
    }
  }

  class Proveedores {
    function __construct(){
      $data['titulo'] = 'PriceShop - Proveedores';
      // Traemos TODOS los Proveedores
      $proveedor = new Proveedor();
      $data['proveedores'] = $proveedor -> get_all();
      write_log("Datos Proveedores | controllers - render.php\n" . serialize($data['proveedores']));
      $vista = new View();
      $vista->render('views/modules/proveedores.php', $data);
    }
  }

  class AltaProveedor {
    function __construct(){
      $data['titulo'] = 'PriceShop - Alta de proveedor';
      $vista = new View();
      $vista->render('views/modules/proveedor_alta.php', $data);
    }
  }

  class EditarProveedor {
    function __construct($variables){
      $id_proveedor = $variables[1];
      $data['titulo'] = 'PriceShop - Editar Proveedor';
      // Traemos los datos del Cliente
      $proveedor = new Proveedor();
      $data['proveedor'] = $proveedor -> get_datos_proveedor($id_proveedor);
      write_log("Datos Proveedor # ". $id_proveedor ." | controllers - render.php\n" . serialize($data['proveedor']));
      $vista = new View();
      $vista->render('views/modules/proveedor_editar.php', $data);
    }
  }

  class Dashboard {
    function __construct(){
      $data['titulo'] = 'PriceShop - Dashboard';
      $vista = new View();
      $vista->render('views/modules/dashboard.php', $data);
    }
  }

  class NuevoAbono {
    function __construct(){
      $data['titulo'] = 'PriceShop - Nuevo Abono';
      $vista = new View();
      $vista->render('views/modules/nuevoabono.php', $data);
    }
  }

  class OrdenCompra {
    function __construct(){
      $data['titulo'] = 'PriceShop - Ordenes de Compra';
      $vista = new View();
      $vista->render('views/modules/ordencompra.php', $data);
    }
  }

  class NuevaOrden {
    function __construct(){
      $data['titulo'] = 'PriceShop - Nueva Orden de Compra';
      $proveedor = new Proveedor();
      // Obtiene Proveedores
      $data['proveedores'] = $proveedor -> get_all();
      write_log("Datos Proveedores | controllers - render.php\n" . serialize($data['proveedores']));
      $vista = new View();
      $vista->render('views/modules/ordencompra_nueva.php', $data);
    }
  }

  class Pedidos {
    function __construct(){
      $data['titulo'] = 'PriceShop - Pedidos';
      // Traemos TODOS los pedidos
      $pedido = new Pedido();
      $data['pedidos'] = $pedido -> get_all();
      $vista = new View();
      $vista->render('views/modules/pedidos.php', $data);
    }
  }

  class NuevoPedido {
    function __construct(){
      $data['titulo'] = 'PriceShop - Nuevo Pedido';
      // Traemos los clientes activos
      $clientes = new Cliente();
      $data['clientes'] = $clientes -> get_activos();
      write_log("NuevoPedido - Clientes | controllers - render.php\n" . serialize($data['clientes']));
      // Traemos las marcas
      $marcas = new Marca();
      $data['marcas'] = $marcas -> get_all();
      write_log("NuevoPedido - Marcas | controllers - render.php\n" . serialize($data['marcas']));
      // Traemos los catálogos
      $catalogos = new Catalogo();
      $data['catalogos'] = $catalogos -> get_all();
      write_log("NuevoPedido - Catalogos | controllers - render.php\n" . serialize($data['catalogos']));
      // Traemos los tipos de artículos
      $tipos_art = new TipoArticulo();
      $data['tipos'] = $tipos_art -> get_all();
      write_log("NuevoPedido - TipoArticulo | controllers - render.php\n" . serialize($data['tipos']));
      $vista = new View();
      $vista->render('views/modules/pedido_nuevo.php', $data);
    }
  }

  class PedidosNuevos {
    function __construct(){
      $data['titulo'] = 'PriceShop - Pedidos';
      // Traemos TODOS los pedidos
      $pedido = new Pedido();
      $data['pedidos'] = $pedido -> get_nuevos();
      $vista = new View();
      write_log(serialize($data['pedidos']));
      $vista->render('views/modules/pedidos_nuevos.php', $data);
    }
  }

  class PedidosFinalizados {
    function __construct(){
      $data['titulo'] = 'PriceShop - Pedidos';
      // Traemos TODOS los pedidos
      $pedido = new Pedido();
      $data['pedidos'] = $pedido -> get_finalizados();
      $vista = new View();
      $vista->render('views/modules/pedidos_finalizados.php', $data);
    }
  }

  class PedidosCancelados {
    function __construct(){
      $data['titulo'] = 'PriceShop - Pedidos';
      // Traemos TODOS los pedidos
      $pedido = new Pedido();
      $data['pedidos'] = $pedido -> get_cancelados();
      $vista = new View();
      $vista->render('views/modules/pedidos_cancelados.php', $data);
    }
  }

  class EditarPedido{
    function __construct($variables){
      $data['titulo'] = 'PriceShop - Editar Pedido';
      // Traemos los datos del pedido
      $pedido = new Pedido();
      $data['pedido'] = $pedido -> get_datos_pedido($variables[1]);
      $data['articulos'] = $pedido -> get_articulos_pedido($variables[1]);
      $vista = new View();
      $vista->render('views/modules/pedido_editar.php', $data);
    }
  }

  class Ventas {
    function __construct(){
      $data['titulo'] = 'PriceShop - Ventas';
      $vista = new View();
      $vista->render('views/modules/ventas.php', $data);
    }
  }


?>
