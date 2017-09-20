	<?php include("topo.php");?>
	<?php include("conecta.php");?>
	
<div class="container">
	<div class="principal">

		<h1>Reserva</h1>
		<form action="salva_reserva.php">
			<!----------------------------------->
			Nome_Cliente: <br>
			<select name="cliente_id" id="combo" class="dropdown-item">
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
			<br>

			<p>Quantidade pessoas: <br>
				<input type="text" name="numero_pessoas">
				<br> Numero da mesa:
				<br>
				<!----------------------------------->
				<input type="number" name="numero_mesa">
				<br> Dia:
				<br>
				<!----------------------------------->
				<input type="date" name="data_reserva">
				<br> Hora entrada:
				<br>
				<!----------------------------------->
				<input type="time" name="hora_entrada">
				<br> Hora saída:
				<br>
				<!----------------------------------->
				<input type="time" name="hora_saida">
				<br>
				<br>
				<!-------------botão---------------->
				<input type="submit" class="btn btn-primary" value="Fazer pedido">
				<br>


		</form>	
		
<?php include("rodape.php");?>