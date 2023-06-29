<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	    <title>Listar Clientes</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
        <link rel="stylesheet" type="text/css" href="css/principal.css">
       
    </head>
<body>

<?php require_once 'menu.php'; ?>

<div>
<form>

<?php require_once 'model/Cliente.php';
$consulta=contarCliente();
	if(!$consulta){
    echo "<h2 class='mt-5 mb-5 d-flex justify-content-center'>Erro no cadastro</h2>";
    } else {
        $res = $consulta->fetch_assoc();
        }
    ?>
   

</form>
</div>    


<?php

require_once 'model/Cliente.php';

$consulta=listaCliente();
  if(!$consulta){
    echo "<h2 class='mt-5 mb-5 d-flex justify-content-center'> Nenhum cliente cadastrado.</h2>";
}else{

    ?>

    <div class="container mt-5">
        <table class="table table-striped">
          <div class="alert alert-secondary" role="alert">
            <p class="mt-1 mb-1 d-flex justify-content-center">N&ordm; de Clientes Cadastrados: <?php  echo $res['COUNT(cpf)']; ?></p>
          </div>


    <div class="input-group mb-3">
    <form action="buscarCliente.php" method="GET">
        <input type="text" class="form-control" name="busca" placeholder="Insira o nome, CPF ou outra informação" aria-label="Recipient's username" aria-describedby="button-addon2" required>
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">&#128269;</button>
        <?php 

if(isset($_GET['busca'])){
	$busca=$_GET['busca'];
		require_once 'model/Cliente.php';
		$consulta=buscaCliente($busca);
		if (!$consulta) {
			echo "<p class='mt-5 mb-5 d-flex justify-content-center'>Nenhum cliente encontrado</p>";
		}else{ ?>
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">Nascimento</th>
                <th scope="col">CEP</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cidade</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($linha=$consulta->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha['cpf']; ?></td>
                <td><?php echo $linha['rg']; ?></td>
                <td><?php echo $linha['nascimento']; ?></td>
                <td><?php echo $linha['cep']; ?></td>
                <td><?php echo $linha['endereco']; ?></td>
                <td><?php echo $linha['cidade']; ?></td>
                <td><?php echo $linha['email']; ?></td>
                <td><?php echo $linha['telefone']; ?></td>
                <td><form action="alterarCliente.php" method="POST">
                    <input type="hidden" name="cpf" value="<?php echo $linha['cpf'];?>">
                    <input type="submit" value="&#128221;"></form></td> 
            </tr>
            <?php  }
            } 
        } 
            ?>
        
        </form>
    </div>
   


	
	
</form>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($linha=$consulta->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['cpf']; ?></td>
                    <td><?php echo $linha['rg']; ?></td>
                    <td><?php echo $linha['nascimento']; ?></td>
                    <td><?php echo $linha['cep']; ?></td>
                    <td><?php echo $linha['endereco']; ?></td>
                    <td><?php echo $linha['cidade']; ?></td>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['telefone']; ?></td>
                    <td><form action="alterarCliente.php" method="POST">
                        <input type="hidden" name="cpf" value="<?php echo $linha['cpf'];?>">
                        <input type="submit" value="&#128221;" class="btn btn-primary"></form></td> 
                </tr>
                <?php  } ?>
    
            </tbody>
        </table>
    </div>
    
    <?php  }
    ?>



</body>
</html>