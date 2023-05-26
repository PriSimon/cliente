<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/listar.css">
	    <title>Listar Produtos</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
    </head>
<body>

<?php

require_once 'model/Cliente.php';

$consulta=listaProduto();
if(!$consula){
    echo "<h2> Nenhum produto cadastrado.</h2>";
}else{
    echo "<table>";
        echo "<tr>";
            echo "<th> ID </th>";
            echo "<th> Nome </th>";
            echo "<th> Descrição </th>";
            echo "<th> Valor (R$) </th>";
        echo "<tr>"

while($linha=$consulta->fetch_assoc()){
         echo "<tr>"
            echo "<td>".$linha['id']."</td>";
            echo "<td>".$linha['nome']."</td>";
            echo "<td>".$linha['descricao']."</td>";
            echo "<td>".$linha['valor']."</td>";
         echo "</tr>"
    }
    echo "</table>";
}

?>




</body>
</html>