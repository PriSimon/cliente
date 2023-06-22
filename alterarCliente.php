<doctype html>
<html>
<head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/alterar.css">
	    <title>Alterar Cliente</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,200">
    </head>
<body>


<?php 
require_once 'menu.php';



if(isset($_POST['cpf'])){
 $cpf=$_POST['cpf'];
require_once 'model/Cliente.php';

 $consulta=selecionaCliente($cpf);
 if (!$consulta){
  	   return "<p>Cliente não encontrado.</p>";
  }else{
	  while($linha=$consulta->fetch_assoc()){ 
?>


<div class="container">
    <div class="container mt-5">
    <form action="alterarCliente.php" method="POST">
            <h1>Alteração de dados dos Clientes</h1>
    </div>
            <p>Nome: <input class="form-control" type="text" name="nome" size="100" maxlegth="100"  value="<?php echo $linha['nome'] ?>"></p>
            <p>CEP: <input  class="form-control" type="text" name="cep" size="8" maxlegth="8" pattern="[0-9]{1,8}\[0-9]{2}"  value="<?php echo $linha['cep']; ?>"></p> 
            <p>Endereço: <input  class="form-control" type="text" name="endereco" size="100" maxlegth="100"  value="<?php echo $linha['endereco']; ?>"></p>
            <p>Cidade: <input  class="form-control" type="text" name="cidade" size="30" maxlegth="30"  value="<?php echo $linha['cidade']; ?>"></p>
            <p>Email: <input class="form-control" type="email" name="email" size="75" maxlegth="75" value="<?php echo $linha['email']; ?>"></p>
            <p>Telefone: <input  class="form-control" type="text" name="telefone" size="20" maxlegth="20" pattern="[0-9]{1,8}\[0-9]{2}" value="<?php echo $linha['telefone']; ?>"></p>
                <input type="hidden" name="cpf" value="<?php echo $linha['cpf']; ?>">
                <input type="hidden" name="rg" value="<?php echo $linha['rg']; ?>">
                <input type="hidden" name="nascimento" value="<?php echo $linha['nascimento']; ?>">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Salvar</button>
         </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
     </div>
     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-info" onclick="javascript:window.print();">
            <span class="material-symbols-outlined">print</span></button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-dark" onclick="javascript:history.back();">Voltar</button>
        </div>
    </div>
   
                           
  
<?php

if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $cep=$_POST['cep'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $rg=$_POST['rg'];
    $nascimento=$_POST['nascimento'];

require_once 'model/Cliente.php';

    $resposta=alteraCliente($nome, $cpf, $rg, $nascimento, $cep, $endereco, $cidade, $email, $telefone);
    if(!$resposta){
        echo "<p> Erro na tentativa de alteração.</p>";
    }else{
        echo "<p> Alteração realizada com sucesso.</p>";
    }
}
                                    
    }
    }
   }
?>

</form>

</body>
</html>
                            
                                
