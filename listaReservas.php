<?php include("topo.php");  ?>
<?php include("conecta.php"); 

 $resultado = mysqli_query($con, "select * from cliente"); 
while($cliente = mysqli_fetch_array($resultado)){


echo $cliente['nome'];
}


echo $cliente['nome'];


?>

<?php include("rodape.php"); ?>




