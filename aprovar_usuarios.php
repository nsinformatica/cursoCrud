<?php
    header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <title>Aprovar Usuários - contato@netosales.com.br</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    </head>
    <body>
    <div class="container" style="margin-top: 40px">
        <h3>Usuários para aprovação</h3>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Nível</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  
    
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
            $busca = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($busca)){
                $id_usuario = $array['id_usuario'];
                $nomeusuario = $array['nomeusuario'];
                $mailusuario = $array['mailusuario'];
                $nivelusuario = $array['nivelusuario'];
            
        ?>
    <tr>
      <td><?php echo $nomeusuario ?></td>
      <td><?php echo $mailusuario ?></td>
      <td><?php echo $nivelusuario ?></td>
      <td><a class="btn btn-success btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivelusuario=1" role="button"><i class="far fa-smile-beam"></i>&nbsp;Administrador</a>
      <a class="btn btn-warning btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivelusuario=2" role="button"><i class="far fa-smile-beam"></i>&nbsp;Funcionário</a>
      <a class="btn btn-default btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivelusuario=3" role="button"><i class="far fa-smile-beam"></i>&nbsp;Conferente</a>
        <a class="btn btn-danger btn-sm" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
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