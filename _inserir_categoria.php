<?php
    include 'conexao.php';
    $nomecategoria = $_POST['nomecategoria'];
    
    
    $sql = "INSERT INTO categoria (nomecategoria)values('$nomecategoria')";
    $inserir = mysqli_query($conexao, $sql);
    
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px">
    <center>
    <h4>Categoria adicionada com sucesso!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
        <a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova Categoria</a>
        </center>
    </div>
</div>