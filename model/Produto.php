<?php
 require_once './persistence/Banco.php';

 function cadastroProduto($id, $nome, $descricao, $valor){
    $banco=new banco();
    $sql="insert into produto values($id, '$nome', '$descricao', '$valor')";
    $resposta=$banco->executar($sql);

     if($resposta){
        return true;
     }else{
        return false;
     }
 }

 function codigoProduto(){
    $banco=new banco();
    $sql="select max(id) from produto";
    $consulta=$banco->consultar($sql);
        if (!$consulta) {
            return false;
        } else {
            while($linha=$consulta->fetch_assoc()){
                $codigo=$linha['max(id)'];
            }
            if($codigo==null){
                $codigo=0;
            }
        } return $codigo;
 }

 function listaProduto(){
    $banco=new banco();
    $sql="select * from produto order by nome";
    $consulta=$banco->consultar($sql);
       if (!$consulta) {
        return false;
       } else {
        return $consulta;
       }
 }

 function buscaProduto($busca){
    $banco=new banco();
    $sql="select * from produto where id='$busca' or nome like '%$busca%' or valor='$busca'";
    $consulta=$banco->consultar($sql);
      if (!$consulta) {
        return false;
      } else {
        return $consulta;
      }  
 }

function alteraProduto($id, $nome, $descricao, $valor){
    $banco=new banco();
    $sql="update produto set nome='$nome', descricao='$descricao', valor='$valor' where id=$id";
    $resposta=$banco->executar($sql);
        if (!$resposta) {
            return false;
        } else {
            return true;
        }      
}


 ?>