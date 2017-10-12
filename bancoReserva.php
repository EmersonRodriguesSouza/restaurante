<!DOCTYPE html><head>
	<script>
		function NumMaxReservasDia(){
			window.alert("O número máximo de reservas por dia foi atingido (5)!");	
		}
		function NumMaximoReservaClienteDia(){
			window.alert("O cliente não pode realizar mais de uma reserva por dia.");
		}
	</script>
</head>
<?php
function listaReservas($con){
	$arrayreserva = array();
	$resultado = mysqli_query($con, "SELECT cliente.nome, reserva.id, reserva.numero_mesa, reserva.data_reserva, reserva.numero_pessoas, reserva.hora_entrada, reserva.hora_saida FROM reserva INNER JOIN cliente ON reserva.cliente_id = cliente.id;");
	if($resultado === FALSE) {
    die();
	}
	while ($reserva = mysqli_fetch_assoc($resultado)){
	array_push($arrayreserva, $reserva);
	}
	return $arrayreserva;
}


function cadastrarReserva($con, $cliente_id, $numero_pessoas, $numero_mesa, $data_reserva, $hora_entrada, $hora_saida){
	$query = "INSERT INTO reserva (cliente_id, numero_pessoas, numero_mesa, data_reserva, hora_entrada, hora_saida) values('{$cliente_id}', '{$numero_pessoas}', '{$numero_mesa}','{$data_reserva}', '{$hora_entrada}', '{$hora_saida}')";
	return(mysqli_query($con, $query));
}

function removeReservas ($con, $id){
	
	$query = "DELETE FROM reserva where id = {$id}";
	return mysqli_query($con, $query);
	
}

function buscaReserva($con, $id){
$resultado = mysqli_query($con, "SELECT cliente.nome, reserva.cliente_id, reserva.id, reserva.numero_mesa, reserva.data_reserva, reserva.numero_pessoas, reserva.hora_entrada, reserva.hora_saida FROM reserva INNER JOIN cliente ON reserva.cliente_id = cliente.id where reserva.id= {$id}");
return mysqli_fetch_assoc($resultado);
	
}


function alteraReserva ($con, $id, $numero_pessoas, $numero_mesa, $data_reserva, $hora_entrada, $hora_saida){
	$query = "UPDATE reserva SET numero_pessoas ='{$numero_pessoas}', numero_mesa ='{$numero_mesa}', data_reserva ='{$data_reserva}', hora_entrada='{$hora_entrada}', hora_saida='{$hora_saida}' where id ='{$id}';";
	return mysqli_query($con, $query);
}


function checarMaximoReservasDia($con, $data_reserva){
	$query_checarreservas = "SELECT * FROM reserva WHERE data_reserva = '{$data_reserva}';";
	$resultado_reservasdia = mysqli_query($con, $query_checarreservas);
	$num_max_reserva = 5;
	if(mysqli_num_rows($resultado_reservasdia) >= $num_max_reserva){?>
		
<p class="negativo">O número máximo de reservas por dia foi atingido (5)!</p>
		<?php
		die();
	} 
}

function checarMaximoReservasClienteDia($con, $cliente_id, $data_reserva){
	$query = "SELECT * FROM reserva WHERE cliente_id = '{$cliente_id}' AND data_reserva = '{$data_reserva}';";
	$resultado = mysqli_query($con, $query);
	$num_max  = 1;
	if (mysqli_num_rows($resultado) >= $num_max) {?>
		<p class="negativo">O cliente não pode realizar mais de uma reserva no mesmo dia.</p>; 
		<?php
		die();
	} else{
		checarMaximoReservasDia($con, $data_reserva);
	}
}

?>