<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php include("bancoCliente.php");?>

<?php

$id = $_POST['id'];
removeClientes($con, $id);
header ("Location: listaCliente.php?removido=true");
die();	
	
?>
