<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/listar.css">
	    <title>Listar Clientes</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
    </head>
<body>

<?php

require_once 'model/Cliente.php';

$consulta=listaCliente();
  if(!$consulta){
    echo "<h2> Nenhum cliente cadastrado.</h2>";
}else{

    echo "<table>";
        echo "<tr>";
            echo "<th> Nome </th>";
            echo "<th> CPF </th>";
            echo "<th> RG </th>";
            echo "<th> Nascimento </th>";
            echo "<th> CEP </th>";
            echo "<th> Encereço </th>";
            echo "<th> Cidade </th>";
            echo "<th> E-mail </th>";
            echo "<th> Telefone </th>";
        echo "</tr>";

while ($linha=$consulta->fetch_assoc()){
         echo "<tr>";
             echo "<td>".$linha['nome']."</td>";
             echo "<td>".$linha['cpf']."</td>";
             echo "<td>".$linha['rg']."</td>";
             echo "<td>".$linha['nascimento']."</td>";
             echo "<td>".$linha['cep']."</td>";
             echo "<td>".$linha['endereco']."</td>";
             echo "<td>".$linha['cidade']."</td>";
             echo "<td>".$linha['email']."</td>";
             echo "<td>".$linha['telefone']."</td>";
        echo "</tr>";
            }
    echo "</table>";
        } 

?>




</body>
</html>