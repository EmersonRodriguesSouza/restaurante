<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php

function inserirCliente($con, $nome, $telefone, $cpf){
	$query = "INSERT INTO cliente (nome, telefone, cpf) values('{$nome}', '{$telefone}', '{$cpf}')";
	return(mysqli_query($con, $query));
}

	$nome = $_GET[ 'nome'];
	$telefone = $_GET[ 'telefone'];
	$cpf = $_GET['cpf'];

?>

<?php

if(inserirCliente($con, $nome, $telefone, $cpf))
{?>
	<p class="text-success"> Cliente <?= $nome;?> <?= $telefone;?> <?= $cpf;?> adicionado </p>
<?php } 
else
{ ?>
	<p class="text-danger">Erro ao cadastrar cliente</p>	
<?php } 

mysqli_close($con);

?>   
   
<?php include("rodape.php");?>