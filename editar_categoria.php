<?php
header("Content-type: text/html; charset=utf-8");
include 'conexao.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Categoria - contato@netosales.com.br</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}
		#botao {
		    background-color: #FF1168;
		    color: #FFFFFF;
		    font-weight: bold;
		
	</style>
</head>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	<h4>Atualizar Categoria</h4>
	<form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
	    <?php
	        $sql = "SELECT * FROM categoria WHERE id_categoria = $id";
	        $buscar = mysqli_query($conexao, $sql);
	        while($array = mysqli_fetch_array($buscar)){
	            $id_categoria = $array['id_categoria'];
               $nomecategoria = $array['nomecategoria'];
                    
	        
	    ?>
		<div class="form-group">
    		<label>ID Categoria</label>
    		<input type="number" class="form-control" name="id_categoria" value="<?php echo $id_categoria ?>" disabled>
    		<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
    
  		</div>
  		<div class="form-group">
    		<label>Nome Categoria</label>
    		<input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>">
    
  		</div>
  		
  		
  		
  		    <div style="text-align: right;">
  		        <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
  		    </div>
  		    <?php } ?>
	</form>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>