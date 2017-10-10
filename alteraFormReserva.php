	<?php include("topo.php");?>
	<?php include("conecta.php");?>
	<?php include("bancoReserva.php");?>
<?php	
	$id = $_GET['id'];
 	$reserva = buscaReserva($con, $id);
?> 	
<div class="container">
	<div class="principal">

		<h1>Reserva</h1>
		<form action="alteraReserva.php" method="post">
		
	
		<table class="table">
			<tr>
			<input type="hidden" name="id" value="<?= $reserva['id']?>">
				<td> Nome_Cliente: </td>
				<td> 
				<select name="cliente_id" id="combo" class="form-control" disabled>
					<option><?= $reserva['nome']?></option>
				</select>
			</td>
			</tr>
			
			
			<tr>
				<td>  Quantidade pessoas: </td>
				<td><input type="number" name="numero_pessoas" class="form-control" value="<?= $reserva['numero_pessoas']?>" max=10></td>
			</tr>
	
			  
			<tr>
				
				<td>Numero da mesa:</td>
				<td>
					<select name="numero_mesa" class="form-control" value="<?= $reserva['numero_mesa'] ?>">
						<option>Mesa Atual: <?= $reserva['numero_mesa']?></option>
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
						<option value="5">05</option>
						<option value="6">06</option>
						<option value="7">07</option>
						<option value="8">08</option>
						<option value="9">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
					</select>
				</td>
			</tr>
				 
			
			<tr>
			    <td>Dia:</td>
				<td><input type="date" name="data_reserva" class="form-control" value="<?= $reserva['data_reserva'] ?>" required></td>
			</tr>
				
				
				<tr>  <td>Hora entrada:</td>
				
				
				<td><input type="time" name="hora_entrada" class="form-control" value="<?= $reserva['hora_entrada'] ?>" required> </td>
				</tr>
				
				<tr>
					<td>Hora saída:</td>
				<td><input type="time" name="hora_saida" class="form-control" value="<?= $reserva['hora_saida'] ?>" required></td>
				</tr>
				</table>		
		<button type="submit" class="btn btn-primary align-self-center"> Fazer reserva </button>
		</form>	
		
		
<?php include("rodape.php");?>