<?php
require_once './persistence/Banco.php';

function cadastroUsuario($id,$nome,$login,$senha,$email){
$banco=new banco();
$sql="insert into usuario values($id,'$nome','$login','$senha','$email')";
$resp=$banco->executar($sql);
if($resp){
    return true;
}else{
    return false;
}
}

function idUsuario(){ //função para gerar o ID automárico
    $banco=new banco();
    $sql="select max(id) from usuario";
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

 
