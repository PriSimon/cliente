<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/listar.css">
	    <title>Listar Clientes</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
       
    </head>
<body>

<?php require_once 'menu.php'; ?>

<div>
<form>



<?php require_once 'model/Cliente.php';
$consulta=contarCliente();
	if(!$consulta){
    echo "<p>Erro no cadastro</p>";
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
    echo "<h2> Nenhum cliente cadastrado.</h2>";
}else{

    ?>

    <div class="container mt-5">
        <table class="table table-striped">
        <p>N&ordm; de Clientes Cadastrados: <?php  echo $res['COUNT(cpf)']; ?></p>
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
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['cpf'] ?></td>
                    <td><?= $linha['rg'] ?></td>
                    <td><?= $linha['nascimento'] ?></td>
                    <td><?= $linha['cep'] ?></td>
                    <td><?= $linha['endereco'] ?></td>
                    <td><?= $linha['cidade'] ?></td>
                    <td><?= $linha['email'] ?></td>
                    <td><?= $linha['telefone'] ?></td>
                    <td><form action="alterarCliente.php" Method="POST"><a value="<?php $linha['cpf']?>" href="alterarCliente.php">&#128221;</a> </td> <!--remover não foi feito <form action="removerCliente.php" Method="POST"><a value="php '.$linha['cpf'].'?>">&#128465;</a>-->
                </tr>
                <?php  } ?>
    
            </tbody>
        </table>
    </div>
    
    <?php  }
    ?>



</body>
</html>