<doctype html>
<html>
<head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <title>Alterar Cliente</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,200">
        <link rel="stylesheet" type="text/css" href="css/principal.css">
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
    <div id="cadas" class="container mt-5">
    <form  class="formCad" action="alterarCliente.php" method="POST">
            <h1 class="mt-5 mb-5 d-flex justify-content-center">Alteração de dados dos Clientes</h1>
    
             <label for="floatingInput">Nome: <input class="form-control" type="text" name="nome" size="100" maxlegth="100"  value="<?php echo $linha['nome'] ?>"></label>
        <div class="form-floating">   
             <label for="floatingInput">CEP: <input  class="form-control" type="text" name="cep" size="8" maxlegth="8" pattern="[0-9]{1,8}\[0-9]{2}"  value="<?php echo $linha['cep']; ?>"></label> 
      </div>
             <label for="floatingInput">Endereço: <input  class="form-control" type="text" name="endereco" size="100" maxlegth="100"  value="<?php echo $linha['endereco']; ?>"></label>
        <div class="form-floating">   
             <label for="floatingInput">Cidade: <input  class="form-control" type="text" name="cidade" size="30" maxlegth="30"  value="<?php echo $linha['cidade']; ?>"></label>
      </div>
             <label for="floatingInput">Email: <input class="form-control" type="email" name="email" size="75" maxlegth="75" value="<?php echo $linha['email']; ?>"></label>
        <div class="form-floating">      
             <label for="floatingInput">Telefone: <input  class="form-control" type="text" name="telefone" size="20" maxlegth="20" pattern="[0-9]{1,8}\[0-9]{2}" value="<?php echo $linha['telefone']; ?>"></label>
        </div>
                <input type="hidden" name="cpf" value="<?php echo $linha['cpf']; ?>">
                <input type="hidden" name="rg" value="<?php echo $linha['rg']; ?>">
                <input type="hidden" name="nascimento" value="<?php echo $linha['nascimento']; ?>">
    <div class="form-group" style="display:inline-flex">
        <div class="col-sm-offset-2 col-sm-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
     
        <div class="col-sm-offset-2 col-sm-3">
            <button type="button" class="btn btn-info" onclick="javascript:window.print();">
            <span class="material-symbols-outlined">print</span></button>
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
        echo "<p class='mt-5 mb-5 d-flex justify-content-center'> Erro na tentativa de alteração.</p>";
    }else{
        echo "<p class='mt-5 mb-5 d-flex justify-content-center'> Alteração realizada com sucesso.</p>";
    }
}
                                    
    }
    }
   }
?>
</div>
</form>

</body>
</html>
                            
                                
