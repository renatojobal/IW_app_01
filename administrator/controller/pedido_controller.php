<?php
require_once "../models/pedidosModels.php";

class pedido_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function pedido_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	public function CreatePedido()
    {
        $pedido = new PedidoModel();

        // if (isset($_POST['nombreCliente'])) {
	        // $pedido->setNombre($_POST['nombre']);
	        // $pedido->setDescripcion($_POST['descripcion']);
	        // $pedido->setPrecio($_POST['precio']);
        	$pedidoResponse = $pedido->CreatePedido();
	        //echo  $userResponse . " response"; //BORRAR
	        if ($pedidoResponse == 1) // exitoso
	        {
	            echo "<script>location.href='../../main.php'</script>";
	        } else {
	            echo "<h1>Error al crear pedido.</h1>";
	        }
		// }else{
		// 	echo "<h1>Error al crear pedido. El campo nombreCliente es requerido</h1>";
		// }
    }
    public function ListPedido()
    {
        $pedido = new PedidoModel();
        $pedidoResponse = $pedido->ListPedido();
        
    }
	public function GetPedido($id)
    {
        $pedido = new PedidoModel();
        $pedidoResponse = $pedido->GetPedido($id);
		//echo "<script>console.log('$userResponse');</script>";
		return $pedidoResponse;
		
    }



    public function deletePedido($id){
        $pedido = new PedidoModel();
            $pedidoResponse = $pedido->DeletePedido($id);
            //echo  $userResponse . " response"; //BORRAR
            if ($pedidoResponse == 1) // exitoso
            {
                echo "<script>location.href='../views/pedidos.php'</script>";
            } else {
                echo "<h1>Error al crear usuario.</h1>";
            }
    }



}
?>