	<?php include("topo.php");?>
	<?php include("conecta.php");?>
	
<div class="container">
	<div class="principal">

		<h1>Reserva</h1>
		<form action="adiciona_reserva.php">
		
	
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
				<td><input type="text" name="numero_pessoas" class="form-control"></td>
			</tr>
	
			  
			<tr>
				
				<td>Numero da mesa:</td>
				<td><input type="number" name="numero_mesa" class="form-control"></td>
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