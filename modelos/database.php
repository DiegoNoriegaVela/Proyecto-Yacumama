<?php
class database{
    const servidor="yacumama.ml";
    const usuariobd="admin_yacumama";
    const clave = "yacumama2022";
    const nombrebd="admin_yacumama";

    public static function Conectar(){
        try{
            $conexion=new PDO("mysql:host=".self::servidor.";dbname=".self::nombrebd.
            ";charser=utf8",self::usuariobd,self::clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            die("Falló ".$e->getMessage());

        }
}
}