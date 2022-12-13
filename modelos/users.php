<?php

class User{
    private $pdo;
    private $users_dni;
    private $users_nombres;
    private $users_apellidos;
    private $users_rol;
    private $users_password;

    public function __CONSTRUCT(){
       
    }

    public function getUsers_dni():?int{
        return $this->users_dni;
    }
    public function setUsers_dni(int $dni){
        $this->users_dni=$dni;
    }

    public function getUsers_nombres():?string{
        return $this->users_nombres;
        }
    public function setUsers_nombres(string $nom){
        $this->users_nombres=$nom;
    }

    public function getUsers_apellidos():?string{
        return $this->users_apellidos;
        }
    public function setUsers_apellidos(string $ape){
        $this->users_apellidos=$ape;
    }

    public function getUsers_rol():?string{
        return $this->users_rol;
        }
    public function setUsers_rol(string $rol){
        $this->users_rol=$rol;
    }

    public function getUsers_password():?string{
        return $this->users_password;
        }
    public function setUsers_password(string $pass){
        $this->users_password=$pass;
    }

    public function Listar(){
        try{
			 $this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM users;");
            $consulta->execute();
			$this->pdo=null;
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

	public function ObtenerUsuarioLogin($dni,$contra){
        try{
			$this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM users WHERE users_dni=? AND users_password=?;");
            $consulta->execute(array($dni,$contra));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            if($r==NULL){
                return null;
            }
            $u=new User();
            $u->setUsers_dni($r->users_dni);
            $u->setUsers_nombres($r->users_nombres);
            $u->setUsers_apellidos($r->users_apellidos);
            $u->setUsers_rol($r->users_rol);
            $u->setUsers_password($r->users_password);
			$this->pdo=null;
            return $u;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ObtenerUsuario($dni){
        try{
			$this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM users WHERE users_dni=?;");
            $consulta->execute(array($dni));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            if($r==NULL){
                return null;
            }
            $u=new User();
            $u->setUsers_dni($r->users_dni);
            $u->setUsers_nombres($r->users_nombres);
            $u->setUsers_apellidos($r->users_apellidos);
            $u->setUsers_rol($r->users_rol);
            $u->setUsers_password($r->users_password);
			$this->pdo=null;
            return $u;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function InsertarUsuario(User $u){
        try{
			 $this->pdo=database::Conectar();
            $consulta="INSERT INTO `users`
            (`users_dni`, `users_nombres`, `users_apellidos`, `users_rol`, `users_password`) VALUES (?,?,?,?,?);";
            $this->pdo->prepare($consulta)->execute(array(
                $u->getUsers_dni(),
                $u->getUsers_nombres(),
                $u->getUsers_apellidos(),
                $u->getUsers_rol(),
                $u->getUsers_password(),
            ));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function ActualizarUsuario(User $u){
        try{
			 $this->pdo=database::Conectar();
            $consulta="UPDATE `users` SET
            /*`users_dni`=?*/ `users_nombres`=?, `users_apellidos`=?, `users_rol`=?, `users_password`=? WHERE users_dni=? ;";
            $this->pdo->prepare($consulta)->execute(array(
                /*$u->getPro_id(),*/
                $u->getUsers_nombres(),
                $u->getUsers_apellidos(),
                $u->getUsers_rol(),
                $u->getUsers_password(),
                $u->getUsers_dni()
            ));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function EliminarUsuario($dni){
        try{
			 $this->pdo=database::Conectar();
            $consulta="DELETE FROM `users` WHERE users_dni=?;";
            $this->pdo->prepare($consulta)->execute(array($dni));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }
}
