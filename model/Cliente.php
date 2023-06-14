<?php
 require_once './persistence/Banco.php';

 function cadastroCliente($nome, $cpf, $rg, $nascimento, $cep, $endereco, $cidade, $email, $telefone){
    $banco=new banco();
    $sql="insert into cliente values('$nome', $cpf, $rg, '$nascimento', $cep, '$endereco', '$cidade', '$email', $telefone)";
    $resposta=$banco->executar($sql);

     if($resposta){
        return true;
     }else{
        return false;
     }
 }

 function listaCliente(){
    $banco=new banco();
    $sql="select * from cliente order by nome";
    $consulta=$banco->consultar($sql);
       if (!$consulta) {
        return false;
       } else {
        return $consulta;
       }
 }

 function buscaCliente($busca){
    $banco=new banco();
    $sql="select * from cliente where cpf='$busca' or nome like '%$busca%' or rg='$busca' or nascimento=$busca or cep='$busca' or endereco like '%$busca%' or cidade='$busca'";
    $consulta=$banco->consultar($sql);
     if (!$consulta) {
        return false;
      } else {
        return $consulta;
      }  
 }

function alteraCliente($nome, $cpf, $nascimento, $cep, $endereco, $cidade, $email, $telefone){
    $banco=new banco();
    $sql="update cliente set nome='$nome', cep=$cep, endereco='$endereco', cidade='$cidade', email='$email', nascimento='$nascimento' telefone=$telefone where cpf=$cpf";
    $resposta=$banco->executar($sql);
        if (!$resposta) {
            return false;
        } else {
            return true;
        }
        
}

function selecionaCliente($cpf){
    $banco=new Banco();
    $sql="select * from cliente where cpf=$cpf";
    $consulta=$banco->consultar($sql);
    if (!$consulta) {
      return false;
   }else{
      return $consulta; 
   }
}


function contarCliente(){
   $banco=new banco();
   $sql="SELECT COUNT(cpf) from cliente";
   $consulta=$banco->consultar($sql);
   if (!$consulta) {
       return false;
   } else {
       return $consulta;
   }
}
 
 ?>
 