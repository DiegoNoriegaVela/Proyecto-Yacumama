<?php
require_once "modelos/users.php";
require_once "modelos/platos.php";
require_once "modelos/pedidos.php";
class UsersControlador{
    
    private $perfil;
    private $platos;
    private $pedidos;
	
    public function __construct(){
        session_start();
		if(!isset($_SESSION['logged']))
			$_SESSION['logged']=false;
        $this->perfil=new User();
        $this->platos=new Plato();
        $this->pedidos=new Pedido();
    }

    public function CerrarSesion(){
        $_SESSION['logged'] = false;

        echo '<meta http-equiv="refresh" content="2; url=index.php?c=users">';
    }

    /**********INTEFACES***************/

    public function Inicio(){
        require_once "vistas/clientes/cliente.php";
    }

    public function InterfazPrincipalAdmin(){
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);
            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/admin/principalAdmin.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function InterfazAdminPersonal(){
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);
            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/admin/personal/principalPersonal.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function InterfazAdminPlatos(){
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);
            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/platos/adminPlatos.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else if($usu->getUsers_rol()=="Cocinero"){
                require_once "vistas/cocina/encabezadoCocina.php";
                require_once "vistas/platos/adminPlatos.php";
                require_once "vistas/cocina/piePagCocina.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }
    
    public function InterfazMeseroPlatos(){
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);
            if($usu->getUsers_rol()=="Mesero"){
                require_once "vistas/mesero/encabezadoMesero.php";
                require_once "vistas/platos/visualizarPlatos.php";
                require_once "vistas/mesero/piePagMesero.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function InterfazPedidos(){
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);
            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/pedidos/adminPedidos.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else if($usu->getUsers_rol()=="Cocinero"){
                require_once "vistas/cocina/encabezadoCocina.php";
                require_once "vistas/pedidos/visualizarPedidos.php";
                require_once "vistas/cocina/piePagCocina.php";
            }else if($usu->getUsers_rol()=="Mesero"){
                require_once "vistas/mesero/encabezadoMesero.php";
                require_once "vistas/pedidos/adminPedidos.php";
                require_once "vistas/mesero/piePagMesero.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function InterfazPedidosDia(){
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);
            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/pedidos/pedidosDia/adminPedidosDia.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else if($usu->getUsers_rol()=="Cocinero"){
                require_once "vistas/cocina/encabezadoCocina.php";
                require_once "vistas/pedidos/pedidosDia/adminPedidosDia.php";
                require_once "vistas/cocina/piePagCocina.php";
            }else if($usu->getUsers_rol()=="Mesero"){
                require_once "vistas/mesero/encabezadoMesero.php";
                require_once "vistas/pedidos/pedidosDia/adminPedidosDia.php";
                require_once "vistas/mesero/piePagMesero.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function DetallePedido(){
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);

            if(isset($_GET['id'])){
                $detpedido=$this->pedidos->ObtenerPedido($_GET['id']);
                $platosPed = explode(";", $detpedido->getPedido_platos());
            }

            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/pedidos/detallesPedido.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else if($usu->getUsers_rol()=="Cocinero"){
                require_once "vistas/cocina/encabezadoCocina.php";
                require_once "vistas/pedidos/detallesPedido.php";
                require_once "vistas/cocina/piePagCocina.php";
            }else if($usu->getUsers_rol()=="Mesero"){
                require_once "vistas/mesero/encabezadoMesero.php";
                require_once "vistas/pedidos/detallesPedido.php";
                require_once "vistas/mesero/piePagMesero.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    /***********ACTUALIZAR***************/

    public function AdminActualizarUsuario(){

        $msg = "";

        if(isset($_GET['dni'])){
            $usu_a=$this->perfil->ObtenerUsuario($_GET['dni']);
        }

        if( isset($_POST['dni']) && isset($_POST['nombres']) && isset($_POST['apellidos'])&& isset($_POST['rol'])&& isset($_POST['password']) && isset($_POST['password_r'])) {
            $dni = strip_tags($_POST['dni']);
            $nombres = strip_tags($_POST['nombres']);
            $apellidos = strip_tags($_POST['apellidos']);
            $rol = strip_tags($_POST['rol']);
            $password = strip_tags($_POST['password']);
            $password_r = strip_tags($_POST['password_r']);

            if ($password==$password_r){

                if($password!=$usu_a->getUsers_password()){
                    $password = sha1($password);
                }

                $u=new User();
                $u->setUsers_dni($dni);
                $u->setUsers_nombres($nombres);
                $u->setUsers_apellidos($apellidos);    
                $u->setUsers_rol($rol);
                $u->setUsers_password($password);
                $this->perfil->ActualizarUsuario($u);

                $msg.="Usuario actualizado correctamente";

                echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazAdminPersonal">';

            }else{
                $msg = "Las claves no coinciden";
            }
        }else{
            $msg = "Complete el formulario";
        }

        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);

            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/admin/personal/actualizarPersonal.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function AdminActualizarPlato(){

        $msg = "";

        if(isset($_GET['id'])){
            $plato_a=$this->platos->ObtenerPlato($_GET['id']);
        }

        if( isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion'])&& isset($_POST['precio'])&& isset($_POST['imagen'])) {
            $id = strip_tags($_POST['id']);
            $nombre = strip_tags($_POST['nombre']);
            $descripcion = strip_tags($_POST['descripcion']);
            $precio = strip_tags($_POST['precio']);
            $imagen = strip_tags($_POST['imagen']);

            $p=new Plato();
            $p->setPlato_id($id);
            $p->setPlato_nombre($nombre);
            $p->setPlato_descripcion($descripcion);    
            $p->setPlato_precio($precio);
            $p->setPlato_img($imagen);
            $this->platos->ActualizarPlato($p);

            $msg.="Plato actualizado correctamente";

            echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazAdminPlatos">';


        }else{
            $msg = "Complete el formulario";
        }

        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);

            if($usu->getUsers_rol()=="Administrador" || $usu->getUsers_rol()=="Cocinero"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/platos/actualizarPlato.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function ActualizarPedido(){

        $mesa = "";
        $subtotal = 0;
        $msg = "";

        if(isset($_GET['id'])){
            $pedido_a=$this->pedidos->ObtenerPedido($_GET['id']);
            $platosPed = explode(";", $pedido_a->getPedido_platos());
        }

        if(isset($_POST['mesa']) && isset($_POST['pago']) && isset($_POST['estado'])) {

            $id = strip_tags($pedido_a->getPedido_id());
            $date = strip_tags($pedido_a->getPedido_date());
            $mesa = strip_tags($_POST['mesa']);
            $pago = strip_tags($_POST['pago']);
            $estado = strip_tags($_POST['estado']);

            $ordenPlatos=""; 
            foreach ($this->platos->Listar() as $pl) :
                $ordenPlatos=strip_tags($ordenPlatos).strip_tags($pl->plato_id).",".strip_tags($_POST[$pl->plato_id]).";";
                $subtotal+=$pl->plato_precio*$_POST[$pl->plato_id];
            endforeach;

            $p=new Pedido();
            $p->setPedido_id($id);
            $p->setPedido_date($date);
            $p->setPedido_mesa($mesa);    
            $p->setPedido_platos($ordenPlatos);
            $p->setPedido_subtotal($subtotal);
            $p->setPedido_pago($pago);
            $p->setPedido_estado($estado);
            $this->pedidos->ActualizarPedido($p);

            $msg.="Plato actualizado correctamente";

            echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazPedidos">';

        }else{
            $msg = "Complete el formulario";
        }

        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);

            if($usu->getUsers_rol()=="Administrador"||$usu->getUsers_rol()=="Mesero"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/pedidos/actualizarPedido.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    /***********REGISTRAR***************/

    public function AdminRegistrarUsuario(){

        //declaramos variables vacias servirán también para repoblar el formulario
        $dni = "";
        $nombres = "";
        $apellidos = "";
        $rol = "";
        $password = "";
        $password_r = "";
        $msg = "";

        if( isset($_POST['dni']) && isset($_POST['nombres']) && isset($_POST['apellidos'])&& isset($_POST['rol'])&& isset($_POST['password']) && isset($_POST['password_r'])) {
            $dni = strip_tags($_POST['dni']);
            $nombres = strip_tags($_POST['nombres']);
            $apellidos = strip_tags($_POST['apellidos']);
            $rol = strip_tags($_POST['rol']);
            $password = strip_tags($_POST['password']);
            $password_r = strip_tags($_POST['password_r']);

            if ($password==$password_r){
                //aquí como todo estuvo OK, resta controlar que no exista previamente el mail ingresado en la tabla users.
                $password = sha1($password);
                $userExist = $this->perfil->ObtenerUsuario($dni);

                if($userExist==null){
                    $u=new User();
                    $u->setUsers_dni($dni);
                    $u->setUsers_nombres($nombres);
                    $u->setUsers_apellidos($apellidos);    
                    $u->setUsers_rol($rol);
                    $u->setUsers_password($password);
                    $this->perfil->InsertarUsuario($u);

                    $msg.="Usuario creado correctamente <br>";

                    echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazAdminPersonal">';
                }else{
                    $msg.="El DNI ingresado ya existe <br>";
                }

            }else{
                $msg = "Las claves no coinciden";
            }
        }else{
            $msg = "Complete el formulario";
        }

        //Acceso solo a Adminsitrador
        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);

            if($usu->getUsers_rol()=="Administrador"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/admin/personal/registrarPersonal.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }

    }

    public function AdminRegistrarPlato(){

        $nombre = "";
        $descripcion = "";
        $precio = "";
        $imagen = "";
        $msg = "";

        if( isset($_POST['nombre']) && isset($_POST['descripcion'])&& isset($_POST['precio'])) {
            //$id = strip_tags($_POST['id']);
            $nombre = strip_tags($_POST['nombre']);
            $descripcion = strip_tags($_POST['descripcion']);
            $precio = strip_tags($_POST['precio']);
            $imagen = strip_tags($_POST['imagen']);

            $ruta_img = '/home/admin/web/yacumama.ml/public_html/img/imgplatos/'.basename($_FILES['imagen']['name']).'.jpg'; 
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_img);
            chmod($ruta_img, 0777);

            $p=new Plato();
            $p->setPlato_nombre($nombre);
            $p->setPlato_descripcion($descripcion);    
            $p->setPlato_precio($precio);
            $p->setPlato_img($imagen);
            $this->platos->InsertarPlato($p);

            $msg.="Plato registrado correctamente";

            echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazAdminPlatos">';


        }else{
            $msg = "Complete el formulario";
        }

        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);

            if($usu->getUsers_rol()=="Administrador" || $usu->getUsers_rol()=="Cocinero"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/platos/registrarPlato.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    public function RegistrarPedido(){

        $mesa = "";
        $subtotal = 0;
        $pago = "";
        $msg = "";

        if(isset($_POST['mesa']) && isset($_POST['pago']) ) {

            $mesa = strip_tags($_POST['mesa']);
            $pago = strip_tags($_POST['pago']);
            $estado = "Pendiente";

            $ordenPlatos=""; 
            foreach ($this->platos->Listar() as $pl) :
                $ordenPlatos=strip_tags($ordenPlatos).strip_tags($pl->plato_id).",".strip_tags($_POST[$pl->plato_id]).";";
                $subtotal+=$pl->plato_precio*$_POST[$pl->plato_id];
            endforeach;

            $p=new Pedido();
            $p->setPedido_mesa($mesa);    
            $p->setPedido_platos($ordenPlatos);
            $p->setPedido_subtotal($subtotal);
            $p->setPedido_pago($pago);
            $p->setPedido_estado($estado);
            $this->pedidos->InsertarPedido($p);

            $msg.="Pedido registrado correctamente";

            echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazPedidosDia">';

        }else{
            $msg = "Complete el formulario";
        }

        $logged = $_SESSION['logged'];
        if(!$logged){
            echo "Ingreso no autorizado";
            die();
        }else{
            $dni = strip_tags($_SESSION['user_dni']);
            $usu=$this->perfil->ObtenerUsuario($dni);

            if($usu->getUsers_rol()=="Administrador" || $usu->getUsers_rol()=="Mesero"){
                require_once "vistas/admin/encabezadoAdmin.php";
                require_once "vistas/pedidos/registrarPedido.php";
                require_once "vistas/admin/piePagAdmin.php";
            }else{
                echo "Ingreso no autorizado";
                die();
            }
        }
    }

    /***********LOGIN***************/

    public function FormLoginUsuario(){
        $_SESSION['logged'] = false;

        $msg="";
        $dni="";

        if(isset($_POST['dni']) && isset($_POST['password'])) {

        if ($_POST['dni']==""){
            $msg.="Debe ingresar un dni <br>";
        }else if ($_POST['password']=="") {
            $msg.="Debe ingresar la clave <br>";
        }else {
            $dni = strip_tags($_POST['dni']);
            $password= sha1(strip_tags($_POST['password']));

            $user = $this->perfil->ObtenerUsuarioLogin($dni,$password);

            if($user!=null){
                $_SESSION['user_dni'] = $user->getUsers_dni();

                $msg .= "Exito!!!";
                $_SESSION['logged'] = true;

                if($this->perfil->ObtenerUsuario($_SESSION['user_dni'])->getUsers_rol()=="Administrador"){
                    echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazPrincipalAdmin">';
                }else if($this->perfil->ObtenerUsuario($_SESSION['user_dni'])->getUsers_rol()=="Cocinero"){
                    echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazPedidos">';
                }else if($this->perfil->ObtenerUsuario($_SESSION['user_dni'])->getUsers_rol()=="Mesero"){
                    echo '<meta http-equiv="refresh" content="2; url=?c=users&a=InterfazPedidos">';
                }
            }else{
                $msg .= "Acceso denegado!!!";
                $_SESSION['logged'] = false;
            }

        }
        }

        require_once "vistas/login.php";
    }

    /***********ELIMINAR***************/

    public function AdminBorrarUsuario(){
        $this->perfil->EliminarUsuario($_GET["dni"]);
        header("location:?c=users&a=InterfazAdminPersonal");
    }

    public function AdminBorrarPlato(){
        $this->platos->EliminarPlato($_GET["id"]);
        header("location:?c=users&a=InterfazAdminPlatos");
    }

    public function BorrarPedido(){
        $this->pedidos->EliminarPedido($_GET["id"]);
        header("location:?c=users&a=InterfazPedidos");
    }
}