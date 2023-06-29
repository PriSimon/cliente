<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <title>Novo Usuário</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    </head>
<body>



<div  id="pag" class="container mt-5">
<form class="formLogin">
<h1 class="mt-5 mb-5 d-flex justify-content-center"> Cadastro de novo Usuário</h1>


<form method="POST" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome: </label>
    <input type="text" class="form-control" name="nome" placeholder="José Josias Jaqueu" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Usuário: </label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="login" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Senha: </label>
    <input type="password" class="form-control" name="senha" required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">E-mail: </label>
    <input type="email" class="form-control" name="email" placeholder="teste@examplo.com" required>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div>
</form>
</form>


<?php

if (isset($_POST['nome'])) {
		$nome=$_POST['nome'];
		$login=$_POST['login'];
		$senha=$_POST['senha'];
		$email=$_POST['email'];
		
		require_once 'model/Usuario.php';
		$id= idUsuario();
		if (!$id) {
			echo "<p>Erro ao cadastrar.</p>";
		}else{
			$id++;
			$resposta=cadastroUsuario($id,$nome,$login,md5($senha),$email);
				if (!$resposta) {
					echo "<p class='mt-5 mb-5 d-flex justify-content-center'>Erro na tentativa de cadastro!</p>";
				}else{
					echo "<p class='mt-5 mb-5 d-flex justify-content-center'>Usuário cadastrado com sucesso!</p>";
          echo "<meta http-equiv='refresh'content='2; url=//localhost/cliente/index.php'>";

		}
	}
}




?>
</div>

</body>
</html>
