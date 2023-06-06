<doctype html>
<html>
<head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="css/alterar.css">
	    <title>Alterar Cliente</title>
        <meta name="author" content="Priscila Simon">
	    <meta name="keywords" content="cadastro, cliente, produto, banco de dados">
	    <meta name="description" content="Sistema para cadastro de clientes e produtos">
    </head>
<body>

<?php 
require_once 'menu.php';
?>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cliente</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" placeholder="Nome do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" placeholder="Email do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-2 control-label">Telefone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" placeholder="Telefone do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpf" class="col-sm-2 control-label">CPF</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cpf" placeholder="Cpf do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="celular" class="col-sm-2 control-label">Celular</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="celular" placeholder="Celular do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bairro" class="col-sm-2 control-label">Bairro</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="bairro" placeholder="Bairro do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cidade" class="col-sm-2 control-label">Cidade</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cidade" placeholder="Cidade do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado" class="col-sm-2 control-label">Estado</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="estado" placeholder="Estado do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado" class="col-sm-2 control-label">Número</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="número" placeholder="Número do cliente">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Salvar</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="reset" class="btn btn-default">Cancelar</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="button" class="btn btn-default" onclick="javascript:history.back();">Voltar</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="button" class="btn btn-default" onclick="javascript:window.print();">Imprimir</button>
                                        </div>
                                    </div>
                           
                                    

</body>
</html>
                            
                                
