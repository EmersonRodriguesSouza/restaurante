<?php include("topo.php"); ?>
<?php include( "conecta.php" );?>
<?php include("bancoCliente.php");?>
	
<table class="table table-striped table-bordered">	
<?php
$arrayReserva = listaReserva($con);
foreach($arrayReserva as $reserva):
?>
		<tr>
		<td><?= $reserva['numero_pessoas']?> </td>
		<td><?= $reserva['numero_mesa']?> </td>
		<td>
		<form action="removeReserva.php" method="post">
		<input type="hidden" name="id" value="<?=$numero_pessoas['id']?>">
			<button class="btn btn-danger"> removerReserva </button>
			</form>
		</td>
	</tr>
 	
	 
	 
<?php	 
endforeach
?>

</table>


/* $resultado = mysqli_query($con, "select * from cliente"); 
while($cliente = mysqli_fetch_array($resultado)){


echo $cliente['nome'];
}


echo $cliente['nome'];


?>
*/
<?php include("rodape.php"); ?>




