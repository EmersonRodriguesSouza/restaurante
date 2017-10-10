<?php include("topo.php"); 
 include( "conecta.php" );
 include("bancoReserva.php");?>
 
 
 <div align="center">
	<?php
	if ( array_key_exists("removido", $_GET) && $_GET[ "removido" ] == "true" ) {
		?>
	<p class="alert-success"> CReservaRemovido </p>
	<?php
	}
	?>	
</div>


<div class="container">
<div class="principal"> 
<table class="table table-striped table-bordered">
		<tr>
			<th>Nome_Cliente</th>
			<th>Data_Reserva</th>
			<th>Número_Mesa</th>
			<th>Quantidade_Pessoas</th>
			<th>Hora_Entrada</th>
			<th>Hora_Saída</th>
			
		</tr>

<?php
		$arrayreserva = listaReservas($con);
		foreach($arrayreserva as $reserva):
		?>
			
		<tr>
			<td><?= $reserva['nome'] ?></td>
			<td><?= $reserva['data_reserva'] ?></td>
			<td><?= $reserva['numero_mesa'] ?></td>
			<td><?= $reserva['numero_pessoas']?></td>
			<td><?= $reserva['hora_entrada'] ?></td>
            <td><?= $reserva['hora_saida'] ?></td>
            <td><a  class="btn btn-primary" href="alteraFormReserva.php"serva.php?id=<?=$reserva['id']?>"> alterar </a></td>
			<td>
			
			
				<form action="removeReserva.php" method="post">
		<input type="hidden" name="id" value="<?=$reserva['id']?>">
			<button class="btn btn-danger"> remover</button>
			</form>
			</td>
			
		</tr>

		<?php
			endforeach
		?>
</table>


<?php include("rodape.php");?>



