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
require_once 'menu.php';

require_once 'model/Produto.php';

if (isset($_GET['ordem'])) { 
	$ordem=$_GET['ordem'];
}else{
	$ordem="";
}

$consulta=listaProduto($ordem);
if(!$consulta){
    echo "<h2> Nenhum produto cadastrado.</h2>";
} else {

    ?>

<div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Nome </th>
                    <th scope="col"> Descrição </th>
                    <th scope="col"> Valor (R$) </th>
                    <th scop="col"> Ações </th>
                </tr>
         </thead>
        <tbody>
            <?php while ($linha=$consulta->fetch_assoc()){ ?>
                <tr>
                    <td><?= $linha['id'] ?></td>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['descricao'] ?></td>
                    <td><?= $linha['valor'] ?></td>
                    <td><a href="alterarProduto.php"> &#128221; &#128465; </td>
                    
                </tr>
    <?php } ?>

    </tbody>
        </table>
               
<?php }
?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-dark" onclick="javascript:window.print();">Imprimir</button>
    </div>
</div>

</div> 


</body>
</html>