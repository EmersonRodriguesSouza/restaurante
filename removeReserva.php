<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php include("bancoReserva.php");?>

<?php

$id = $_POST['id'];
removeReservas($con, $id);
header ("Location: listaReservas.php?removido=true");
die();	
	
?>
