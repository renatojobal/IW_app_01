<?php 
	require_once "./header.php";

?>
<h1>Gestión de Platos</h1>
<div class="menuDashboard"><a href="platos_add.php">+ Anadir plato</a></div>
<?php

	include("../controller/plato_controller.php");
	$control= new plato_controller();
    $control->ListPlato();
?>

<?php require_once "./footer.php"; ?>