<head>
	<meta charset="utf-8">
	<title> Restaurante </title>
	<link href="bootstrap-3.0.1-dist/css/bootstrap.css"rel="stylesheet">
	<link href="bootstrap-4.0.0-alpha.6-dist/css/restaurante.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>






<?php
require_once('conecta.php');
$slq = "SELECT * FROM cliente";
$stmt = mysqli_query($con, $slq);
$data = [];
$i = 0;
while($row = mysqli_fetch_assoc($stmt)){
    $data[$i]['id'] = $row['id'];
    $data[$i]['nome'] = $row['nome'];
    $data[$i]['telefone'] = $row['telefone'];
    $data[$i]['cpf'] = $row['cpf'];
    $i++;
}
require_once('Export.php');
$export = new Export();

if(isset($_GET['export']) && $_GET['export'] == 'excel'){
    $export->excel('Lista de Clientes', $_GET['fileName'], $data);
}
	
	
if(isset($_GET['export']) && $_GET['export'] == 'xml'){
    $export->xml($_GET['fileName'], $data );
}

	
	
	
	
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exportando dados com PHP</title>
        <!-- Compiled and minified CSS -->
       
   

    
        
    








<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		 <a class="navbar-brand" href="index.php">HOME</a>
		</div>
		<div>
		 	<ul class="nav navbar-nav"> 
		 	<li> <a href="clienteForm.php"> <font size="0.1" CADASTRAR CLIENTE> </font> </a></li>
		 	<li> <a href="reservaForm.php"> CADASTRAR RESERVA </a></li>
				<li> <a href="listaCliente.php">LISTA CLIENTES</a> </li>
		 	<li> <a href="listaReservas.php"> LISTA RESERVAS  </a></li>
		 	<!--<li> <a href="?export=excel&&fileName=clientes"> EXCEL. CLIENTES</a></li>-->
		 	<li> <a href="?export=xml&&fileName=clientes"> XML. CLIENTES</a></li>
		 	
		 	 </a></li>
		 	</ul>

		
  
		</div>
	</div>
</div>
<div class="escorpo">