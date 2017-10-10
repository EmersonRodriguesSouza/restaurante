<?php include("topo.php");?>
<div class="principal">
	<div class="container" align="center">
		<h1>Cliente</h1>
		<form class="align-items-center" action="adiciona_cliente.php" method="post" action="<?= $_SERVER['PHP_SELF']?>">
		<table class="table">
		<tr>
			<td>Nome_Completo:</td>
			<td> <input class= "form-control"type="text" name="nome" maxlength="60" required><br/></td> 
		</tr>
		<tr>
		    <td>Telefone:</td>
			<td><input class="form-control"type="number" name="telefone" required><br/> </td>
		</tr>
		<tr>
			<td>CPF:</td>
			<td> <input class="form-control type="number" name="cpf" required><br/></td>
		</tr>
		
		
		</table>
				<button type="submit" value="adicionar" class="btn btn-primary">Cadastrar</button>
		</form>

<?php include("rodape.php");?>