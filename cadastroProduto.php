<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
	    <title>Novo Produto</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
    </head>
<body>

<form id="cadastro" action="cadastroProduto.php" method="POST">
    <h1> Cadastro de Produtos </h1>
        <p>Nome: <input type="text" name="nome" size="100" maxlegth="100" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" title="Nome do produto" required></p>
        <p>Descrição:  <input type="text" name="descricao" size="150" maxlegth="150" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></p> 
        <p>Valor R$:   <input type="text" name="valor" size="10" maxlegth="10" pattern="[0-9]{1,8}\[0-9]{2}" title="99.99" required></p> 
        <input type="submit" name="cadastrar" value="Cadastrar">
</form>


<?php

if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $valor=$_POST['valor'];

require_once 'model/Produto.php';
    $codigo=codigoProduto();
    if (!$codigo) {
        echo "<h2> Erro na tentativa de cadastro do produto.</h2>";
    } else {
        $codigo++;
        $resposta=cadastroProduto($codigo, $nome, $descricao, $valor);
        if (!$resposta) {
            echo "<h2> Erro na tentativa de cadastro.</h2>";
        } else {
            echo "<h2>Produto cadastrado com sucesso.</h2>";
        }  
    }
}

?>

</body>
</html>
