<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>
    a{
        color:#FFF !important;
    
    }
    a:hover{
        text-decoration: underline !important;
    }
</style>
</head>

<?php
require_once 'model/Usuario.php';

$estalog=estaLogado();
	//if($estalog){
//	echo "<p class='mt-4 mb-1 d-flex justify-content-center>Você não está logado, favor logar!</p>";
//else{ //está logado: return true

?>

<ul class="nav justify-content-center bg-dark p-2" >
  <li class="nav-item">
    <a class="nav-link" href="home.php">Página Inicial</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="listarCliente.php">Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="listarProduto.php">Produtos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cadastroCliente.php">Novo cliente</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cadastroProduto.php">Novo produto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logoff.php">Sair</a>
  </li>
</ul>

<?php //} ?>