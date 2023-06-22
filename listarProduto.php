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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,200">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
       
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
            <h1>Produtos Cadastrados</h1>
            <thead>
                <tr>
                    <th scope="col"> ID  <form action="listarProduto.php" method="GET" style="display:inline">
				        <input type="hidden" name="ordem" value="id">
					    <button type="submit" class="btn btn-secondary btn-sm">
                        <span class="material-symbols-outlined">south</span></button></form></th>
                    <th scope="col"> Nome  <form action="listarProduto.php" method="GET" style="display:inline">
				        <input type="hidden" name="ordem" value="nome">
					    <button type="button" class="btn btn-secondary btn-sm"><span class="material-symbols-outlined">south</span></form></th>
                    <th scope="col"> Descrição  <form action="listarProduto.php" method="GET" style="display:inline"></form></th>
                    <th scope="col"> Valor (R$)  <form action="listarProduto.php" method="GET" style="display:inline">
				        <input type="hidden" name="ordem" value="valor">
					    <button type="button" class="btn btn-secondary btn-sm"><span class="material-symbols-outlined">south</span></form></th>
                    <th scop="col"> Ações  </th>
                </tr>
         </thead>
        <tbody>
            <?php while ($linha=$consulta->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['descricao']; ?></td>
                    <td><?php echo $linha['valor']; ?></td>
                    <td><form action="alterarProduto.php" method="POST" style="display:inline">
                        <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
                        <input type="submit" value="&#128221;" class="btn btn-primary"></form>
                        <form action="removerProduto.php" method="POST" style="display:inline">
                        <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
                        <input type="submit" value="&#128465;" class="btn btn-danger"></form>
                    </td> 
                </tr>
    <?php } ?>

    </tbody>
        </table>
               
<?php }
?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="button" class="btn btn-info" onclick="javascript:window.print();">
            <span class="material-symbols-outlined">print</span></button>
    </div>
</div>

</div> 


</body>
</html>