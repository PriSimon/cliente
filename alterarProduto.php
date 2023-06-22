<doctype html>
<html>
<head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/alterar.css">
	    <title>Alterar Produto</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,200">
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
    <div class="container mt-5">
    <form action="alterarProduto.php" method="POST">
            <h1>Alteração de Produto</h1>
    </div>
        <p>Nome: <input type="text" name="nome" size="100" maxlegth="100" pattern="[A-Za-zçÇáÁãÃâÂàÀêÊéÉèÈíÍìÌóÓôÔòÒõÕ\s]{2,30}"  value="<?php echo $linha['nome'] ?>"></p>
        <p>Descrição:  <input type="text" name="descricao" size="150" maxlegth="150" pattern="[0-9]{1,8}\[0-9]{2}"  value="<?php echo $linha['descricao'] ?>"></p> 
        <p>Valor R$:   <input type="text" name="valor" size="10" maxlegth="10" pattern="[0-9]{1,8}\[0-9]{2}" value="<?php echo $linha['valor'] ?>"></p> 
        <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
        
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Salvar</button>
         </div>
    </div>
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
    $descricao=$_POST['descricao'];
    $valor=$_POST['valor'];
    $id=$_POST['id'];
    

require_once 'model/Produto.php';

    $resposta=alteraProduto($id, $nome, $descricao, $valor);
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
