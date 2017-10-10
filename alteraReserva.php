<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php include("bancoReserva.php");?>


<?php 
			$id = $_POST['id'];
			$numero_pessoas = $_POST['numero_pessoas'];
			$numero_mesa = $_POST['numero_mesa'];
			$data_reserva = $_POST['data_reserva'];
			$hora_entrada = $_POST['hora_entrada'];
			$hora_saida = $_POST['hora_saida'];

?>

<div class="principal">
<?php

if(alteraReserva($con, $id, $numero_pessoas, $numero_mesa, $data_reserva, $hora_entrada, $hora_saida))
{?>
	<p class="text-success"> Sucesso </p>
<?php } else { 
$msg = mysqli_error($con);
?>
	<p class="text-danger">Erro ao alterar cliente <?= $msg?> <$></p>
		
<?php } 

mysqli_close($con);

?>
</div>