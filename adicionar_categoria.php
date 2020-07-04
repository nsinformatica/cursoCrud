<?php
    header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta charset="utf-8">
	<title>Adicionar Categoria - contato@netosales.com.br</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
		#tamanhoContainer {
			width: 500px;
		}
		#botao {
		    background-color: #FF1168;
		    color: #FFFFFF;
		    font-weight: bold;
		}
	</style>
</head>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	<h4>Adicionar Categoria</h4>
	<form action="_inserir_categoria.php" method="post" style="margin-top: 20px">
		
  		<div class="form-group">
    		<label>Categoria</label>
    		<input type="text" class="form-control" name="nomecategoria" placeholder="Insira o nome da categoria" autocomplete="off" required>
    
  		</div>
  		
  		
  		
  		    <div style="text-align: right;">
  		        <a href = "menu.php " role="button" class="btn btn-sm btn-primary">Voltar</a>
  		        <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
  		    </div>
	</form>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>