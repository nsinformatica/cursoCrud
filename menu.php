<?php
    
    header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Curso de CRUD - contato@netosales.com.br</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php
    
    session_start();
  
    
    if(!isset ($_SESSION['usuario'])){
        header('Location: index.php');
    }
    
    include 'conexao.php';
    $usuario = $_SESSION['usuario'];
    $sql = "SELECT nivelusuario FROM usuarios WHERE mailusuario = '$usuario' AND status='Ativo'";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $nivel = $array['nivelusuario'];
?>
<div class="container" style="margin-top: 100px">
    <div class="row">
  <?php
    if(($nivel == 1)||($nivel == 2)){
        
  ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Opção para adicionar produto em nosso estoque.</p>
        <a href="produto.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualizar, editar e excluir os produtos cadastrados.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Listar Produtos</a>
      </div>
    </div>
  </div>
    <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Categorias</h5>
        <p class="card-text">Opção para cadastrar categorias de produtos.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Fornecedor</h5>
        <p class="card-text">Opção para cadastrar fornecedores dos produtos.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedor</a>
      </div>
    </div>
  </div>
    <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuários</h5>
        <p class="card-text">Cadastrar usuários internamente no sistema.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cad. Usuários</a>
      </div>
    </div>
  </div>
    <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados.</p>
        <a href="aprovar_usuarios.php" class="btn btn-primary">Aprovar</a>
      </div>
    </div>
  </div>
    
    
    
    </div>
</div>




<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>