<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
	    <title>Novo Cliente</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
    </head>
<body>

<?php require_once 'menu.php';?>

<div >
<form>

<?php require_once 'model/Cliente.php';
$consulta=contarCliente();
	if(!$consulta){
    echo "<p>Erro no cadastro</p>";
    } else {
        $res = $consulta->fetch_assoc();
        echo $res['COUNT(cpf)'];
        }
    ?>

</form>
</div>    




<div class="container pb-5">
    <div class="alert alert-secondary" role="alert">
    <p>N&ordm; de Clientes Cadastrados: <?php  echo $res['COUNT(cpf)']; ?></p>
    </div>
    <form id="cadastro" action="cadastroCliente.php" method="POST">
        <h1 class="mt-5 mb-5"> Cadastro de Clientes </h1>
            <p>Nome: <input class="form-control" type="text" name="nome" size="100" maxlegth="100" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" title="Nome completo" required></p>
            <p>CPF:  <input class="form-control" type="text" name="cpf" size="11" maxlegth="11" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></p> 
            <p>RG:   <input  class="form-control"type="text" name="rg" size="10" maxlegth="10" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></p> 
            <p>Data de nascimento: <input class="form-control" type="date" name="nascimento" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></p> 
            <p>CEP: <input  class="form-control" type="text" name="cep" size="8" maxlegth="8" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></p> 
            <p>Endereço: <input  class="form-control" type="text" name="endereco" size="100" maxlegth="100" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s][0-9]{1,8}\[0-9]{2}" title="Rua X de Y 222" required></p>
            <p>Cidade: <input  class="form-control" type="text" name="cidade" size="30" maxlegth="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" title="Nome da cidade" required></p>
            <p>Email: <input class="form-control" type="email" name="email" size="75" maxlegth="75" title="fulano@exemplo.com" required></p>
            <p>Telefone: <input  class="form-control" type="text" name="telefone" size="20" maxlegth="20" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></p> 
            <input type="submit" class="btn btn-primary" name="cadastrar" value="Cadastrar">
    </form>
</div>


<?php

if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $rg=$_POST['rg'];
    $nascimento=$_POST['nascimento'];
    $cep=$_POST['cep'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];

require_once 'model/Cliente.php';

    $resposta=cadastroCliente($nome, $cpf, $rg, $nascimento, $cep, $endereco, $cidade, $email, $telefone);
    if(!$resposta){
        echo "<h2> Erro na tentativa de cadastro.</h2>";
    }else{
        echo "<h2> Cadastro realizado com sucesso.</h2>";
    }
}

        function criarMinimo($hoje){
	        $ano=substr($hoje,0,4);
	        $ano-=25;
	        return $ano."-01-01";
}

?>

</body>
</html>

