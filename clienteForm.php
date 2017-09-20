<?php include("topo.php");?>
<div class="principal">
	<div class="container">
		<h1>Cliente</h1>
		<form action="adiciona_cliente.php">
			nome:
			<input type="text" name="nome" required><br/> telefone:
			<input type="number" name="telefone" required><br/> cpf:
			<input type="number" name="cpf" required><br/>

			<input type="submit" value="adicionar" class="btn-primary">
		</form>

<?php include("rodape.php");?>