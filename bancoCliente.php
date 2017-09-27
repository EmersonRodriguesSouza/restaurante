<?php
function listaCliente($con) {
	$arrayCliente = array();
	$query_listarclientes =  "SELECT * FROM cliente";
	$resultado = mysqli_query( $con, $query_listarclientes );

	while ( $cliente = mysqli_fetch_array( $resultado ) ) {
		
	array_push($arrayCliente, $cliente);	
	} 
	return $arrayCliente;
}




function inserirCliente($con, $nome, $telefone, $cpf){
	$query = "INSERT INTO cliente (nome, telefone, cpf) values('{$nome}', '{$telefone}', '{$cpf}')";
	return(mysqli_query($con, $query));
}

function removeClientes ($con, $id){
	
	$query = "DELETE FROM cliente where id = {$id}";
	return mysqli_query($con, $query);
	
}




?>