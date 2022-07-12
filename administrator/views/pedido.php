<?php 
	require_once "./header.php";

?>
<h1>Gestión de Pedidos</h1>

<?php

	include("../controller/pedido_controller.php");
	$control= new pedido_controller();
    $control->ListPedido();
?>

<?php require_once "./footer.php"; ?>