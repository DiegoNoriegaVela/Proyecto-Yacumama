<?php
require_once "modelos/database.php";
if(!isset($_REQUEST['c'])){
    require_once "controladores/users.controlador.php";
    $controlador=new UsersControlador();
    call_user_func(array($controlador,"Inicio"));

}else{
    $controlador = $_REQUEST['c'];
    require_once "controladores/$controlador.controlador.php";
    $controlador=ucwords($controlador)."Controlador";
    $controlador= new $controlador;
    $accion=isset($_REQUEST['a'])?$_REQUEST['a']:"Inicio";
    call_user_func(array($controlador,$accion));
}