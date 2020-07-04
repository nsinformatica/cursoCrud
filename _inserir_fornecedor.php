<?php
    include 'conexao.php';
    $nomefornecedor = $_POST['nomefornecedor'];
    
    
    $sql = "INSERT INTO fornecedor (nomefornecedor)values('$nomefornecedor')";
    $inserir = mysqli_query($conexao, $sql);
    
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container" style="width: 500px; margin-top: 20px">
    <center>
    <h4>Fornecedor foi adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
        <a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Fornecedor</a>
        </center>
    </div>
</div>