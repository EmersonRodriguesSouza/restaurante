<?php include("conecta.php");?>
<?php include("topo.php");?>
<?php include("bancoReserva.php");?>



<div class="principal">
<?php
			$cliente_id = $_POST["cliente_id"];
			$numero_pessoas = $_POST["numero_pessoas"];
			$numero_mesa = $_POST["numero_mesa"];
			$data_reserva = $_POST["data_reserva"];
			$hora_entrada = $_POST["hora_entrada"];
			$hora_saida = $_POST["hora_saida"];

if(cadastrarReserva($con, $cliente_id, $numero_pessoas, $numero_mesa, $data_reserva, $hora_entrada, $hora_saida))
{ ?>
	<p class="alert-success">Reserva realizada com sucesso.</p>
<?php }
else
{  ?>
	<p class="alert-danger">Erro ao realizar reserva.</p>
<?php }
mysqli_close($con);

?>
</div>
			
<?php include("rodape.php");?>