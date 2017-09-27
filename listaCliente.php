<?php include("topo.php"); ?>
<?php include( "conecta.php" );?>
<?php include("bancoCliente.php");?>


<div class="container">
<div class="principal"> 

<table class="table table-striped table-bordered">
 
<?php  
$arrayCliente = listaCliente($con);

foreach($arrayCliente as $cliente): 
?>
	<tr>
		<td><?= $cliente['nome']?> </td>
		<td><?= $cliente['telefone']?> </td>
		<td>
			<a href ="removeCliente.php?id=<?=$cliente['id']?>" class="text-danger">  remover</a>
		</td>
	</tr>
 	
	 
	 
<?php	 
endforeach
?>
</table>
</div>
</div> 
<?php include("rodape.php"); ?>


