	<?php include("topo.php");?>
	<?php include("conecta.php");?>
	
<div class="container">
	<div class="principal">

		<h1>Reserva</h1>
		<form action="adiciona_reserva.php" method="post">
		
	
		<table class="table">
			<tr>
				<td> Nome_Cliente: </td>
				<td> 
				<select name="cliente_id" id="combo" class="form-control" required>
				<option>Selecione o cliente ...</option>
				<?php
				$busca = "SELECT * FROM cliente";
				$resultado = mysqli_query( $con, $busca );
				while ( $ver = mysqli_fetch_assoc( $resultado ) ) {
					echo "<option value= {$ver['id']}>
						{$ver['nome']}</option>";
				}
				?>
				</select>
			</td>
			</tr>
			
			
			<tr>
				<td>  Quantidade pessoas: </td>
				<td><input type="number" name="numero_pessoas" class="form-control" max=10></td>
			</tr>
	
			  
			<tr>
				
				<td>Numero da mesa:</td>
				<td>
					<select name="numero_mesa" class="form-control">
						<option>Selecione a mesa ...</option>
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
				<td><input type="date" name="data_reserva" class="form-control" required></td>
			</tr>
				
				
				<tr>  <td>Hora entrada:</td>
				
				
				<td><input type="time" name="hora_entrada" class="form-control" required> </td>
				</tr>
				
				<tr>
					<td>Hora saída:</td>
				<td><input type="time" name="hora_saida" class="form-control" required></td>
				</tr>
				</table>		
		<button type="submit" class="btn btn-primary align-self-center"> Fazer reserva </button>
		</form>	
		
		
<?php include("rodape.php");?>