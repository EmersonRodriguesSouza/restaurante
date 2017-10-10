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

function buscaCliente($con, $id){
	$query = "SELECT * FROM cliente where id ={$id}";
	$resultado_busca = mysqli_query($con, $query);
	return mysqli_fetch_assoc($resultado_busca);
	
	
}
function alteraCliente ($con, $id, $nome,$telefone, $cpf){
	$query = "UPDATE cliente SET nome ='{$nome}', telefone ='{$telefone}', cpf ='{$cpf}' where id ='{$id}';";
	return mysqli_query($con, $query);
}
	




?>