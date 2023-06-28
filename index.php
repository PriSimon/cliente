<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Sistema C&P</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/principal.css">
		
    </head>
<body>

<?php 
require_once 'menu.php';
?>

<div class="container mt-5">
<form method="POST">
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="login">
  <label for="floatingInput">Usuário: </label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" name="senha">
  <label for="floatingPassword">Senha: </label>
  <div class="col-12 mt-5">
    <button class="btn btn-primary" type="submit" style="display:inline">Logar</button>


	<label for="floatingInput" style="display:inline" class="float-right"> Ainda não tem cadastro? <a href="cadastroUsuario.php"><button class="btn btn-primary ml-2" type="submit">Cadastrar</button></a></label>
</div>
</form>



<?php
	if(isset($_POST['login'])){
		$login=$_POST['login'];
		$senha=$_POST['senha'];
		require_once 'model/Usuario.php';

		$resposta=login($login,$senha);
		if ($resposta) {
			echo "<p class='mt-5 mb-5 d-flex justify-content-center'>Login realizado com sucesso!</p>";
			//$teste=criarLogin($teste,$usuario);
			echo "<meta http-equiv='refresh'content='2; url=//localhost/cliente/home.php'>"; //direcionar apenas quando fizer o login
		}else{
			echo "<p class='mt-5 mb-5 d-flex justify-content-center'>Erro na tentativa de Login.</p>";
		}
		}



?>
</div>



</body>
</html>
