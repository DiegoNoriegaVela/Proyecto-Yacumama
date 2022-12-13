<?php

class Pedido{
    private $pdo;
    private $pedido_id;
    private $pedido_date;
    private $pedido_mesa;
    private $pedido_platos;
    private $pedido_subtotal;
    private $pedido_pago;
    private $pedido_estado;

    public function __CONSTRUCT(){
       
    }

    public function getPedido_id():?int{
        return $this->pedido_id;
    }
    public function setPedido_id(int $id){
        $this->pedido_id=$id;
    }

    public function getPedido_date():?string{
        return $this->pedido_date;
        }
    public function setPedido_date(string $pedido){
        $this->pedido_date=$pedido;
    }

    public function getPedido_mesa():?string{
        return $this->pedido_mesa;
        }
    public function setPedido_mesa(string $mesa){
        $this->pedido_mesa=$mesa;
    }

    public function getPedido_platos():?string{
        return $this->pedido_platos;
        }
    public function setPedido_platos(string $platos){
        $this->pedido_platos=$platos;
    }

    public function getPedido_subtotal():?string{
        return $this->pedido_subtotal;
        }
    public function setPedido_subtotal(string $subtotal){
        $this->pedido_subtotal=$subtotal;
    }

    public function getPedido_pago():?string{
        return $this->pedido_pago;
        }
    public function setPedido_pago(string $pago){
        $this->pedido_pago=$pago;
    }

    public function getPedido_estado():?string{
        return $this->pedido_estado;
        }
    public function setPedido_estado(string $estado){
        $this->pedido_estado=$estado;
    }


    public function Listar(){
        try{
			 $this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM pedidos;");
            $consulta->execute();
			$this->pdo=null;
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function ListarPendientes(){
        try{
			 $this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM pedidos WHERE pedido_estado!='Terminado';");
            $consulta->execute();
			$this->pdo=null;
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function ListarTerminados(){
        try{
			 $this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM pedidos WHERE pedido_estado='Terminado';");
            $consulta->execute();
			$this->pdo=null;
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function ObtenerPedido($id){
        try{
			$this->pdo=database::Conectar();
            $consulta=$this->pdo->prepare("SELECT * FROM pedidos WHERE pedido_id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            if($r==NULL){
                return null;
            }
            $p=new Pedido();
            $p->setPedido_id($r->pedido_id);
            $p->setPedido_date($r->pedido_date);
            $p->setPedido_mesa($r->pedido_mesa);
            $p->setPedido_platos($r->pedido_platos);
            $p->setPedido_subtotal($r->pedido_subtotal);
            $p->setPedido_pago($r->pedido_pago);
            $p->setPedido_estado($r->pedido_estado);
			$this->pdo=null;
            return $p;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function InsertarPedido(Pedido $p){
        try{
			 $this->pdo=database::Conectar();
            $consulta="INSERT INTO `pedidos`
            (`pedido_id`, `pedido_date`, `pedido_mesa`, `pedido_platos`, `pedido_subtotal`, `pedido_pago`, `pedido_estado`) VALUES (?,?,?,?,?,?,?);";
            $this->pdo->prepare($consulta)->execute(array(
                $p->getPedido_id(),
                $p->getPedido_date(),
                $p->getPedido_mesa(),
                $p->getPedido_platos(),
                $p->getPedido_subtotal(),
                $p->getPedido_pago(),
                $p->getPedido_estado()
            ));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function ActualizarPedido(Pedido $p){
        try{
			 $this->pdo=database::Conectar();
            $consulta="UPDATE `pedidos` SET
            /*`Pedido_id`=?*/ `pedido_date`=?, `pedido_mesa`=?, `pedido_platos`=?, `pedido_subtotal`=?, `pedido_pago`=?, `pedido_estado`=? WHERE pedido_id=? ;";
            $this->pdo->prepare($consulta)->execute(array(
                /*$p->getPro_id(),*/
                $p->getPedido_date(),
                $p->getPedido_mesa(),
                $p->getPedido_platos(),
                $p->getPedido_subtotal(),
                $p->getPedido_pago(),
                $p->getPedido_estado(),
                $p->getPedido_id()
            ));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }

    public function EliminarPedido($id){
        try{
			 $this->pdo=database::Conectar();
            $consulta="DELETE FROM `pedidos` WHERE pedido_id=?;";
            $this->pdo->prepare($consulta)->execute(array($id));
			$this->pdo=null;
        }catch(Exception $e){
            die($e->getMessage()); 
        }
    }
}
