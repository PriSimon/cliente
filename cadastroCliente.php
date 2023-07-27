<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Novo Cliente</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
        <link rel="stylesheet" type="text/css" href="css/principal.css">
    </head>
<body>

<?php require_once 'menu.php';?>

<div >
<form>

<?php require_once 'model/Cliente.php';
$consulta=contarCliente();
	if(!$consulta){
    echo "<p class='mt-5 mb-5 d-flex justify-content-center'>Erro no cadastro</p>";
    } else {
        $res = $consulta->fetch_assoc();
        echo $res['COUNT(cpf)'];
        }
    ?>

</form>
</div>    




<div id="cadas" class="container pb-5">
    <div class="alert alert-secondary" role="alert">
    <p class="mt-1 mb-1 d-flex justify-content-center">N&ordm; de Clientes Cadastrados:  <?php  echo  $res['COUNT(cpf)']; ?></p>
    </div>
    <div id="cadas">
    <form class="formCad" action="cadastroCliente.php" method="POST">
        <h1 class="mt-3 mb-3 d-flex justify-content-center"> Cadastro de Clientes </h1>
            <label for="floatingInput">Nome: <input class="form-control" type="text" name="nome" size="50" maxlegth="50" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" title="Nome completo" required></label>
        <div class="form-floating" >
            <label for="floatingInputGrid">CPF:  <input class="form-control" type="text"  id="floatingInputGrid" name="cpf" size="11" maxsize="11" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></label>  
        
    <label  class="ml-5 mt-0 mb-0" for="floatingInputGrid">RG:   <input  class="form-control" type="text" id="floatingInputGrid" name="rg" size="10" maxlegth="10" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></label> 
    <label  class="ml-5 mt-0 mb-0" for="floatingInputGrid">Data de nascimento: <input class="form-control" type="date" id="floatingInputGrid" name="nascimento" max="<?php echo date("Y-m-d"); ?>" min="<?php echo criarMinimo(date("Y-m-d"));?>" required></label> 
    </div>
    <div class="form-floating" >
    <label class="mb-0 mt-0" for="floatingInputGrid">CEP: <input  class="form-control" type="text" id="floatingInputGrid" name="cep" size="8" maxlegth="8" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></label> 
    </div>    
    <p class="pt-0 pb-0">Endereço: <input  class="form-control mt-0 mb-0" type="text" name="endereco" size="100" maxlegth="100" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s][0-9]{1,8}\[0-9]{2}" title="Rua X de Y 222" required></p>
    <div class="form-floating" >
    <label  for="floatingInputGrid">Cidade: <input  class="form-control" type="text" id="floatingInputGrid" name="cidade" size="30" maxlegth="30" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}" title="Nome da cidade" required></label>
    </div>  
    <p class="pt-0 pb-0">Email: <input class="form-control" type="email" name="email" size="75" maxlegth="75" title="fulano@exemplo.com" required></p>
    <div class="form-floating" >
    <label class="pt-0 pb-0" for="floatingInputGrid">Telefone: <input  class="form-control" type="text" id="floatingInputGrid" name="telefone" size="20" maxlegth="20" pattern="[0-9]{1,8}\[0-9]{2}" title="Apenas números" required></label> 
            </div>  
            <input type="submit" class="btn btn-primary" name="cadastrar" value="Cadastrar">
    </form>
</div>
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
        echo "<h2 class='mt-5 mb-5 d-flex justify-content-center'> Erro na tentativa de cadastro.</h2>";
    }else{
        echo "<h2 class='mt-5 mb-5 d-flex justify-content-center'> Cadastro realizado com sucesso.</h2>";
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

