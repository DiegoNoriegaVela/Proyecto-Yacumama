<?php

class Plato{
    private $pdo;
    private $plato_id;
    private $plato_nombre;
    private $plato_descripcion;
    private $plato_precio;
    private $plato_img;

    public function __CONSTRUCT(){
       
    }

    public function getPlato_id():?int{
        return $this->plato_id;
    }
    public function setPlato_id(int $id){
        $this->plato_id=$id;
    }

    public function getPlato_nombre():?string{
        return $this->plato_nombre;
        }
    public function setPlato_nombre(string $nom){
        $this->plato_nombre=$nom;
    }

    public function getPlato_descripcion():?string{
        return $this->plato_descripcion;
        }
    public function setPlato_descripcion(string $des){
        $this->plato_descripcion=$des;
    }

    public function getPlato_precio():?float{
        return $this->plato_precio;
        }
    public function setPlato_precio(float $precio){
        $this->plato_precio=$precio;
    }

    public function getPlato_img():?string{
        return $this->plato_img;
        }
    public function setPlato_img(string $img){
        $this->plato_img=$img;
    }

    public function Listar(){
        try{
			 $this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM platos;");
            $consulta->execute();
			$this->pdo=null;
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function ObtenerPlato($id){
        try{
			$this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM platos WHERE plato_id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            if($r==NULL){
                return null;
            }
            $p=new Plato();
            $p->setPlato_id($r->plato_id);
            $p->setPlato_nombre($r->plato_nombre);
            $p->setPlato_descripcion($r->plato_descripcion);
            $p->setPlato_precio($r->plato_precio);
            $p->setPlato_img($r->plato_img);
			$this->pdo=null;
            return $p;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function InsertarPlato(Plato $p){
        try{
			 $this->pdo=database::Conectar();
            $consulta="INSERT INTO `platos`
            (`plato_id`, `plato_nombre`, `plato_descripcion`, `plato_precio`, `plato_img`) VALUES (?,?,?,?,?);";
            $this->pdo->prepare($consulta)->execute(array(
                $p->getPlato_id(),
                $p->getPlato_nombre(),
                $p->getPlato_descripcion(),
                $p->getPlato_precio(),
                $p->getPlato_img(),
            ));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function ActualizarPlato(Plato $p){
        try{
			 $this->pdo=database::Conectar();
            $consulta="UPDATE `platos` SET
            /*`plato_id`=?*/ `plato_nombre`=?, `plato_descripcion`=?, `plato_precio`=?, `plato_img`=? WHERE plato_id=? ;";
            $this->pdo->prepare($consulta)->execute(array(
                /*$p->getPro_id(),*/
                $p->getPlato_nombre(),
                $p->getPlato_descripcion(),
                $p->getPlato_precio(),
                $p->getPlato_img(),
                $p->getPlato_id()
            ));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function EliminarPlato($id){
        try{
			 $this->pdo=database::Conectar();
            $consulta="DELETE FROM `platos` WHERE plato_id=?;";
            $this->pdo->prepare($consulta)->execute(array($id));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }
}