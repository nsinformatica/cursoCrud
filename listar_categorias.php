<?php
    header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Categorias</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    </head>
    <body>
    <div class="container" style="margin-top: 40px; width: 600px">
        <h3>Lista de Categorias</h3>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Categoria</th>
      <th scope="col">Nome Categoria</th>
      <th scope="col">Acao</th>
    </tr>
  </thead>
  
    
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM categoria";
            $busca = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($busca)){
                $id_categoria = $array['id_categoria'];
                $nomecategoria = $array['nomecategoria'];
                
            
        ?>
    <tr>
      <td><?php echo $id_categoria ?></td>
      <td><?php echo $nomecategoria ?></td>
      
      <td><a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
      </td>
      <?php } ?>
    </tr>
    
  
</table>
    <div style="text-align: right">
        <a href = "index.php " role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    </div>
     
     
     <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    </body>
</html>