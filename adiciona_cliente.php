<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php include("bancoCliente.php");?>
<?php 


	$nome = $_POST[ 'nome'];
	$telefone = $_POST[ 'telefone'];
	$cpf = $_POST['cpf'];

?>

<?php

if(inserirCliente($con, $nome, $telefone, $cpf))
{?>
	<p class="text-success"> Cliente <?= $nome;?> <?= $telefone;?> <?= $cpf;?> adicionado </p>
<?php } else { 
$msg = mysqli_error($con);
?>
	<p class="text-danger">Erro ao cadastrar cliente <?= $msg?> <$></p>
		
<?php } 

mysqli_close($con);

?>
 
<?php
	

?>
   
         
<?php include("rodape.php");?>