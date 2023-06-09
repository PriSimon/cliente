<doctype html>
<html>
<head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	   
	    <title>Alterar Produto</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,200">
        <link rel="stylesheet" type="text/css" href="css/principal.css">
    </head>
<body>


<?php 
require_once 'menu.php';



if(isset($_POST['id'])){
 $id=$_POST['id'];
require_once 'model/Produto.php';

 $consulta=selecionaProduto($id);
 if (!$consulta){
  	   return "<p>Produto não encontrado.</p>";
  }else{
	  while($linha=$consulta->fetch_assoc()){ 
?>


<div class="container">
    <div id="cadas"  class="container mt-5">
    <form class="formCad" action="alterarProduto.php" method="POST">
            <h1 class="mt-5 mb-5 d-flex justify-content-center">Alteração de Produto</h1>
    </div>
        <label for="floatingInput">Nome: <input type="text" name="nome" size="100" maxlegth="100" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}"  value="<?php echo $linha['nome'] ?>"></label>
        <label for="floatingInput">Descrição:  <input type="text" name="descricao" size="100" maxlegth="150" pattern="[0-9]{1,8}\[0-9]{2}"  value="<?php echo $linha['descricao'] ?>"></label> 
        <div class="form-floating" >
            <label for="floatingInput">Valor R$:   <input type="text" id="floatingInputGrid"  name="valor" size="10" maxlegth="10" pattern="[0-9]{1,8}\[0-9]{2}" value="<?php echo $linha['valor'] ?>"></label> 
        </div>
        <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
        
    
    <div class="form-group mt-5" style="display:inline-flex">
        <div class="col-sm-offset-2 col-sm-3" >
        <button type="submit" class="btn btn-primary">Salvar</a></button>
        <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
     
    
        <div class="col-sm-offset-2 col-sm-3" >
            <button type="button" class="btn btn-info" onclick="javascript:window.print();">
            <span class="material-symbols-outlined">print</span></button>
            <button type="button" class="btn btn-dark" onclick="javascript:history.back();"><a href="listarProduto.php">Voltar</a></button>
        </div>
    </div>          
  
<?php

if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $valor=$_POST['valor'];
    $id=$_POST['id'];
    

require_once 'model/Produto.php';

    $resposta=alteraProduto($id, $nome, $descricao, $valor);
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

</form>

</body>
</html>   
