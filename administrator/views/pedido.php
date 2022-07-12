<?php 
	require_once "./header.php";

?>
<h1>Gestión de Pedidos</h1>
<div class="menuDashboard"><a href="pedido_add.php">+ Add Pedido</a></div>
<?php

	include("../controller/user_controller.php");
	$control= new user_controller();
    $control->ListUser();
?>

<?php require_once "./footer.php"; ?>