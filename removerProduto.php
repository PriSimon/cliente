<doctype html>
<html>
<head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/alterar.css">
	    <title>Exluir Produto</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
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
 


<form  method="POST">
<div class="card">
  <div class="card-header">
       <h1>Excluir Produto</h1>
      </div>
      </div>
  <div class="card-body">
    <h5 class="card-title">Nome: <?php echo $linha['nome']; ?></h5>
        <p >ID:  <?php echo $linha['id']; ?></p>
        <p >Descrição:  <?php echo $linha['descricao']; ?></p> 
        <p >Valor R$:  <?php echo $linha['valor']; ?></p> 
        <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Excluir</button>
      </div>
 

    <div class="form-group">
        <div class="col-sm-offset-0 col-sm-5">
            <button type="button" class="btn btn-dark" onclick="javascript:history.back();">Voltar</button>
        </div>
     </div>
     </div>
     </form>

<?php

if(isset($_POST['id'])){
    $id=$_POST['id'];
    

require_once 'model/Produto.php';

    $resposta=removerProduto($id);
    if(!$resposta){
        echo "<p> Erro na tentativa de excluir.</p>";
    }else{
        echo "<p> Produto excluído com sucesso.</p>";
    }
}
                                    
    }
    }
  }
?>


   

</body>
</html>   
