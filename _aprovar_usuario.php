<?php
include 'conexao.php';
$id = $_GET['id'];
$nivelusuario = $_GET['nivelusuario'];

if ($nivelusuario == 1){
    $update = "UPDATE usuarios SET status='Ativo', nivelusuario = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "ADMINISTRADOR APROVADO!";
}
if ($nivelusuario == 2){
    $update = "UPDATE usuarios SET status='Ativo', nivelusuario = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "FUNCIONARIO APROVADO!";
}
if ($nivelusuario == 3){
    $update = "UPDATE usuarios SET status='Ativo', nivelusuario = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "CONFERENTE APROVADO!";
}
header("Location: aprovar_usuarios.php");
?>