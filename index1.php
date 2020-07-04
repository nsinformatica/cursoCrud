<?php
include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE mailusuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($buscar);

$senhabd = $dados['senhausuario'];
//INICIO CODIGO NOVO
$senhadecodificada = sha1($senha);
#verifica se existe o usuário
 
$linha = mysqli_affected_rows($conexao);
 
if ($linha == 1) { #existe usuário
 
	if($senhabd == $senhadecodificada) {#senha é igual?
		 session_start();
		 $_SESSION['usuario'] = $usuario;
		header("Location: menu.php");
 
	} else {
		header('Location:erro.php');
	}
	
} else {
	header('Location: erro2.php');
}




//FIM DO CÓDIGO NOVO


/*
while($array = mysqli_fetch_array($buscar)){
$senha = $array['senhausuario'];
$senhadecodificada = sha1($senhausuario);

    if ($total > 0){
        if ($senhadecodificada == $senha){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: menu.php');
        }else {
            header('Location: erro.php');
        }
    } else {
    header('Location: erro.php');
    }
}
*/

?>