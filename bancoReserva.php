<?php
function listaReservas($con){
	$arrayreserva = array();
$resultado = mysqli_query($con, "SELECT cliente.nome, reserva.id, reserva.numero_mesa, reserva.data_reserva, reserva.numero_pessoas, reserva.hora_entrada, reserva.hora_saida FROM reserva INNER JOIN cliente ON reserva.cliente_id = cliente.id");
while ($reserva = mysqli_fetch_assoc($resultado)){
	array_push($arrayreserva, $reserva);
}
return($arrayreserva);
	
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
	$query = "SELECT * FROM cliente where id ={$id}";
	$resultado_busca = mysqli_query($con, $query);
	return mysqli_fetch_assoc($resultado_busca);
	
	
}


function alteraReserva ($con, $id, $nome,$telefone, $cpf){
	$query = "UPDATE cliente SET nome ='{$nome}', telefone ='{$telefone}', cpf ='{$cpf}' where id ='{$id}';";
	return mysqli_query($con, $query);
}




?>