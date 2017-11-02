



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
    $data[$i]['CPF'] = $row['cpf'];
    $i++;
}
require_once('Export.php');
$export = new Export();

if(isset($_GET['export']) && $_GET['export'] == 'excel'){
    $export->excel('Lista de Clientes', $_GET['fileName'], $data);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exportando dados com PHP</title>
        <!-- Compiled and minified CSS -->
       
    <body>

    <div class="container">
        <div class="row">
            <h1>Lista de clientes </h1>
        </div>
        
        <div class="row">
            <table class="bordered highlight">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome_cliente</th>
                        <th>Telefone</th> 
                        <th>CPF</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>

   
</html>