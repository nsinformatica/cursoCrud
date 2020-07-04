<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mailusuario = $_POST['mailusuario'];
$senhausuario = $_POST['senhausuario'];
//$nivelusuario = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO `usuarios`(`nomeusuario`, `mailusuario`, `senhausuario`,  `status`) VALUES ('$nomeusuario', '$mailusuario', sha1('$senhausuario'), '$status')";
$inserir = mysqli_query($conexao, $sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px">
    <center>
    <h4>Usuário adicionado com sucesso, esperando aprovação</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
        <a href="cadastro_usuario_externo.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Usuário</a>
        </center>
    </div>
</div>