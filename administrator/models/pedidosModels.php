<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class PedidoModel 
{
  private $idPedido;
  private $idPlatoEntrada;
  private $idPlatoFuerte;
  private $idPostre;
  private $nombreCliente;
  private $pagado; // Int
 

  #region Set y Get
  public function getIdPedido(){
    return $this->idPedido;
  }
  
  public function ListPedido() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select id, idPlatoEntrada, idPlatoFuerte, idPostre, nombreCliente, pagado from pedidos");
    $resSQL=$miconexion->verconsultacrud("pedido_update.php","delete_pedido.php");
    //$this->Disconnect();
    return $resSQL;
  }
  public function CreatePedido() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into pedidos values('','$this->idPlatoEntrada','$this->idPlatoFuerte','$this->idPostre','$this->nombreCliente','$this->pagado')");

    //$this->Disconnect();
    return $resSQL;
  }

  public function GetPedido($idPedido) {
    
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from pedidos where id = $idPedido ");
    $lista_pedidos = $miconexion -> consulta_lista();
    //$this->Disconnect();
    return $lista_pedidos;
  }


public function DeletePedido($idPedido){
  $miconexion= new clase_mysqli();
  $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
  $resSQL=$miconexion->consulta("delete from `pedidos` where `pedidos`.`id` = $idPedido;");
  return $resSQL;
  
}
}