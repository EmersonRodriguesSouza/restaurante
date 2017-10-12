<?php include("topo.php");?>
<?php include("conecta.php");?>
<?php include("bancoCliente.php");?>


<?php 

	$nome = $_POST[ 'nome'];
	$telefone = $_POST[ 'telefone'];
	$cpf = $_POST['cpf'];

?>

<div class="principal">
<?php

if(inserirCliente($con, $nome, $telefone, $cpf))
{?>
	<p class="positivo"> Cliente <?= $nome?> cadastrado com sucesso </p>
<?php } else { 
$msg = mysqli_error($con);
?>
	<p class="negativo">Erro ao cadastrar cliente <?= $msg?> <$></p>
		
<?php } 

mysqli_close($con);

?>
 
</div>
   
         
<?php include("rodape.php");?>