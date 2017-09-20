<?php include("conecta.php");?>
<?php include("topo.php");?>


<?php
//function insereProduto($con, $cliente_id, $numero_pessoas, $numero_mesa, $data, $hora_entrada, $hora_saida){

//}
			
			$cliente_id = $_GET["cliente_id"];
			$numero_pessoas = $_GET[ "numero_pessoas" ];
			$numero_mesa = $_GET[ "numero_mesa" ];
			$data_reserva = $_GET[ "data_reserva" ];
			$hora_entrada = $_GET["hora_entrada"];
			$hora_saida = $_GET["hora_saida"];
			
$query = "INSERT INTO reserva (cliente_id, numero_pessoas, numero_mesa, data_reserva, hora_entrada, hora_saida) values('{$cliente_id}', '{$numero_pessoas}', '{$numero_mesa}','{$data_reserva}', '{$hora_entrada}', '{$hora_saida}')";
	mysqli_query($con, $query);
			?>
			
		<?php include("rodape.php");?>