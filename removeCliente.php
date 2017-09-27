<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php include("bancoCliente.php");?>

<?php

$id = $_GET['id'];
removeClientes($con, $id);

?>
<p class="text-success"> cliente <?=$id?> Removido </p>