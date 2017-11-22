<?php include("topo.php");?>
	<body>
		
	<?php
     ini_set('default_charset','UTF8-8');

     $xml = simplexml_load_file('exemplo.xml') ;
foreach($xml->produto as $produto){
    echo $produto->codigo.'<br>';
    echo $produto->nome.'<br>';
    echo $produto->valor.'<br><br><br>';
}


     ?>
	
	
			
			
			
			
			<img src="Imagens/capa2.jpg" width="100%" height="100%">
			
			
			
			
			
			
<?php include("rodape.php");?>