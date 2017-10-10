<?php include("topo.php"); ?>
<?php include( "conecta.php" );?>
<?php include("bancoCliente.php");?>

<div align="center">
	<?php
	if ( array_key_exists( "removido", $_GET ) && $_GET[ "removido" ] == "true" ) {
		?>
	<p class="alert-success"> Cliente Removido </p>
	<?php
	}
	?>
</div>

<div class="container">
	<div class="principal">

		<table class="table table-striped table-bordered">
			<tr>
				<th>Nome_Cliente</th>
				<th>Telefone</th>
				<th>CPF</th>

			</tr>
			<?php  
$arrayCliente = listaCliente($con);

foreach($arrayCliente as $cliente): 
?>
			<tr>
				<td>
					<?= $cliente['nome']?>
				</td>
				<td>
					<?= $cliente['telefone']?>
				</td>
				<td>
					<?= $cliente['cpf'] ?>
				</td>
				<td>
					<a  class="btn btn-primary" href="alteraFormCliente.php?id=<?=$cliente['id']?>"> alterar </a>
				</td>
				<td>
					<form action="removeCliente.php" method="post">
						<input type="hidden" name="id" value="<?=$cliente['id']?>">
						<button class="btn btn-danger"> remover</button>
					</form>
				</td>
			</tr>



			<?php
			endforeach ?>
		</table>
	</div>
</div>
<?php include("rodape.php"); ?>