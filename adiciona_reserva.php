<?php include("conecta.php");?>
<?php include("topo.php");?>

<?php

function cadastrarReserva($con, $cliente_id, $numero_pessoas, $numero_mesa, $data_reserva, $hora_entrada, $hora_saida){
	$query = "INSERT INTO reserva (cliente_id, numero_pessoas, numero_mesa, data_reserva, hora_entrada, hora_saida) values('{$cliente_id}', '{$numero_pessoas}', '{$numero_mesa}','{$data_reserva}', '{$hora_entrada}', '{$hora_saida}')";
	return(mysqli_query($con, $query));
}
			
			$cliente_id = $_GET["cliente_id"];
			$numero_pessoas = $_GET["numero_pessoas"];
			$numero_mesa = $_GET["numero_mesa"];
			$data_reserva = $_GET["data_reserva"];
			$hora_entrada = $_GET["hora_entrada"];
			$hora_saida = $_GET["hora_saida"];

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
			
<?php include("rodape.php");?>