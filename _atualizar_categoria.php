<?php
include 'conexao.php';
$id = $_POST['id'];
$nomecategoria = $_POST['nomecategoria'];

$sql = "UPDATE `categoria` SET `nomecategoria` = '$nomecategoria' WHERE id_categoria = $id";
$atualizar = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px">
    <center>
    <h3>Categoria alterada com sucesso!</h3>
    </center>
    <div style="padding-top: 20px">
        <center>
        <a href="listar_categorias.php" role="button" class="btn btn-sm btn-primary">Listar Categorias</a>
        </center>
    </div>
</div>