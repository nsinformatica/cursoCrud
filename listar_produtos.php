<?php
    header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <title>Listagem de produtos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
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
    
    <div class="container" style="margin-top: 40px">
        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro. Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Acao</th>
    </tr>
  </thead>
  
    
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM estoque";
            $busca = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($busca)){
                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            
        ?>
    <tr>
      <td><?php echo $nroproduto ?></td>
      <td><?php echo $nomeproduto ?></td>
      <td><?php echo $categoria ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php echo $fornecedor ?></td>
      <td>
          <?php
            if(($nivel==1)||($nivel==2)){
                
            
          ?>
          <a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
          <?php } 
          if($nivel==1){
          ?>
        <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
        <?php } ?>
      </td>
      <?php } ?>
    </tr>
    
  
</table>
    <div style="text-align: right">
        <a href = "menu.php " role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    </div>
     
     
     <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    </body>
</html>