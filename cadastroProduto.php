<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Novo Produto</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
        <link rel="stylesheet" type="text/css" href="css/principal.css">
    </head>
<body>

<?php 
require_once 'menu.php';
?>

<div id="cadas" class="container mt-5">
<form  class="formCad" id="cadastro" action="cadastroProduto.php" method="POST">
    <h1 class="mt-5 mb-5 d-flex justify-content-center"> Cadastro de Produtos </h1>
    <br>
        <label for="floatingInput">Nome:  <input class="form-control" type="text" name="nome" size="50" maxlegth="100" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" title="Nome do produto" required></label>
        <label for="floatingInput">Descrição:  <input class="form-control" type="text" name="descricao" size="50" maxlegth="150" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></label> 
        <div class="form-floating" >
            <label for="floatingInputGrid">Valor R$:   <input  class="form-control" type="text"  id="floatingInputGrid" name="valor" size="10" maxlegth="10" pattern="[0-9]{1,8}\[0-9]{2}" title="99.99" required></label> 
        </div>
        <input type="submit" class="btn btn-primary d-flex justify-content-center" name="cadastrar" value="Cadastrar">


<?php

if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $valor=$_POST['valor'];

require_once 'model/Produto.php';
    $codigo=codigoProduto();
    if (!$codigo) {
        echo "<h2 class='mt-5 mb-5 d-flex justify-content-center'> Erro na tentativa de cadastro do produto.</h2>";
    } else {
        $codigo++;
        $resposta=cadastroProduto($codigo, $nome, $descricao, $valor);
        if (!$resposta) {
            echo "<h2 class='mt-5 mb-5 d-flex justify-content-center'> Erro na tentativa de cadastro.</h2>";
        } else {
            echo "<h2 class='mt-5 mb-5 d-flex justify-content-center'>Produto cadastrado com sucesso.</h2>";
        }  
    }
}

?>

</form>
</div>

</body>
</html>
