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
 
  public function setArgs($idPlatoEntrada, $idPlatoFuerte, $idPostre, $nombreCliente, $pagado){
    $this->idPlatoEntrad=$idPlatoEntrada;
    $this->idPlatoEntrada=$idPlatoEntrada;
    $this->idPlatoFuerte=$$idPlatoFuerte;
    $this->idPostre=$idPostre;
    $this->nombreCliente=$nombreCliente;
    $this->pagado=$pagado; // Int

  }

  #region Set y Get
  public function getIdPedido(){
    return $this->idPedido;
  }
  
  public function ListPedido() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select id, idPlatoEntrada, idPlatoFuerte, idPostre, nombreCliente, pagado from pedidoshardcoded");
    $resSQL=$miconexion->verconsultacrud("pedido_update.php","delete_pedido.php");
    //$this->Disconnect();
    return $resSQL;
  }
  public function CreatePedido() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("insert into pedidoshardcoded values('','$this->idPlatoEntrada','$this->idPlatoFuerte','$this->idPostre','$this->nombreCliente','$this->pagado')");

    //$this->Disconnect();
    return $resSQL;
  }

  public function GetPedido($idPedido) {
    
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from pedidoshardcoded where id = $idPedido ");
    $lista_pedidos = $miconexion -> consulta_lista();
    //$this->Disconnect();
    return $lista_pedidos;
  }


public function DeletePedido($idPedido){
  $miconexion= new clase_mysqli();
  $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
  $resSQL=$miconexion->consulta("delete from `pedidoshardcoded` where `pedidos`.`id` = $idPedido;");
  return $resSQL;
  
}
}