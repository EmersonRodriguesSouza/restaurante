<?php include("topo.php"); ?>
			

<?php
function insereProduto($conexao, $nome, $telefone, $cpf){
$query = "INSERT INTO cliente (nome, telefone, cpf) values('{$nome}', '{$telefone}', '{$cpf}')";
	return(mysqli_query($conexao, $query));
}
			$nome = $_GET[ "nome" ];
			$telefone = $_GET[ "telefone" ];
			$cpf = $_GET[ "cpf" ];
			?>

			<?php
			$conexao = mysqli_connect( 'localhost', 'root', '', 'restaurante' );

			
			if(insereProduto($conexao, $nome, $telefone, $cpf)){ ?>
				Cadastrado
			<p class="alert-success"> O cliente cadastrado: <?=$nome ?>, <?=$telefone ?>, <?=$cpf ?> </p>
				
			<?php } else { ?>
				
			<p class="alert-danger"> Cliente não cadastrado: <?=$nome ?>,</p>
			<?php 
				
			}
?>
			

					

	<?php include("rodape.php"); ?>