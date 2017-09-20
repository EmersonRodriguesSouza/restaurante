<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php

	$nome = $_GET[ 'nome'];
	$telefone = $_GET[ 'telefone'];
	$cpf = $_GET['cpf'];
    

	$query = "INSERT INTO cliente (nome, telefone, cpf) values('{$nome}', '{$telefone}', '{$cpf}')";
	
	return(mysqli_query($conexao, $query));
	
	mysqli_close($conexao);
 
?>		

   <p class="alert-success"> Cliente <?= $nome;?> <?= $telefone;?> <?= $cpf;?> adicionado </p>
   
<?php include("rodape.php");?>