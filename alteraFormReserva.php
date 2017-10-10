<?php include("topo.php"); ?>
<?php include( "conecta.php" );?>
<?php include("bancoCliente.php");?>
<?php 
	
	$id = $_GET['id'];
 	$cliente = buscaCliente($con, $id);

?>
<div class="principal">
	<div class="container" align="center">
		<h1>Alterar Cliente</h1>
		<form class="align-items-center" action="alteraReserva.php" method="post" action="<?= $_SERVER['PHP_SELF']?>">
		<table class="table">
		<tr>
			<input type="hidden" name="id" value="<?= $cliente['id'] ?>">
			<td>Nome_Completo:</td>
			<td> <input class= "form-control"type="text" name="nome" maxlength="60" value="<?=$cliente['nome']?>" required></br></td> 
		</tr>
		<tr>
		    <td>Telefone:</td>
			<td><input class="form-control"type="number" name="telefone" value="<?=$cliente['telefone']?>" required><br/> </td>
		</tr>
		<tr>
			<td>CPF:</td>
			<td> <input class="form-control" type="number" name="cpf" value="<?=$cliente['cpf']?>" required><br/></td>
		</tr>
		
		
		</table>
				<button type="submit" class="btn btn-primary">Alterar</button>
		</form>

<?php include("rodape.php");?>