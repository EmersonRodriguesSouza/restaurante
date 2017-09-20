<?php include("topo.php");?>
<div class="principal">
	<div class="container">
		<h1>Cliente</h1>
		<form action="adiciona_cliente.php">
		<table class="table">
		<tr>
			<td>Nome:</td>
			<td> <input class= "form-control"type="text" name="nome" required><br/></td> 
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
				<button type="submit" value="adicionar" class="btn-primary">Cadastrar</button>
		</form>

<?php include("rodape.php");?>