<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Clientes e Produtos</title>
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

<div class="container mt-5 mb-5">
<h1 class="mt-5 mb-5 d-flex justify-content-center">Bem vindo ao sistema de cadastro de clientes e produtos.</h1>
<h2 class="mt-2 mb-2 d-flex justify-content-center">Use o menu acima para navegar.</h2>

<div class="alert bg-dark text-white mt-5"  display= "flex" justify-content="center" role="alert">
<?php 

echo "<h2 class='mt-3 mb-3 d-flex justify-content-center'>Hoje é dia</h2>";
echo "<h2 class='d-flex justify-content-center'>".date("d/m/Y")."</h2>";
?>

</div>
</div>



</body>
</html>


