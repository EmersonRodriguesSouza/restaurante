<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php include("bancoCliente.php");?>


<?php 
	
	$id = $_POST['id'];
	$nome = $_POST[ 'nome'];
	$telefone = $_POST[ 'telefone'];
	$cpf = $_POST['cpf'];

?>

<?php

if(alteraCliente($con, $id, $nome, $telefone, $cpf))
{?>
	<p class="text-success"> Cliente <?= $nome;?> <?= $telefone;?> <?= $cpf;?> alterado </p>
<?php } else { 
$msg = mysqli_error($con);
?>
	<p class="text-danger">Erro ao alterar cliente <?= $msg?> <$></p>
		
<?php } 

mysqli_close($con);

?>