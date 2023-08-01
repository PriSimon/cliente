<?php
require_once './persistence/Banco.php';

function cadastroUsuario($id,$nome,$login,$senha,$email){
$banco=new banco();
$sql="insert into usuario values($id,'$nome','$login','$senha','$email')";
//return $sql;
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

 function login($login,$senha){ //login em si
	$banco= new Banco();
	$sql="select login,senha from usuario WHERE login  like  '$login'";
	$consulta=$banco->consultar($sql);

	if(!$consulta){
		return false;
	}else{
		while ($linha=$consulta->fetch_assoc()) {
			if ($linha['login']==$login){
				if ($linha['senha']===$senha){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
}


 function criarLogin($usuario){ //função para salvar o login (cookie)
	//vou criar uma validação futuramente...bem...bem...futuramente, caso ele não consida funfar o cookie retorna falso.
		setcookie('usuario',$usuario); 
		return true;
}



function estaLogado(){ //função para forçar log caso tente acessar o menu sem entrar como usuário. Colocar no MENU
	if(isset($_COOKIE['usuario'])) {
		return true;
	}else{
		return false;
	}

}




?>