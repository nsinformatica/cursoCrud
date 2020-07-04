<?php
    header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Cadastro usuario Externo- contato@netosales.com.br</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 400px; margin-top: 40px">
    <div style="text-align: right;">
        <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
    </div>
    <h4>Cadastro de Usuário</h4>
    <form action="_insert_usuario_externo.php" method="post">
        <div class="form-group">
            <label>Nome do Usuário</label>
            <input type="text" name="nomeusuario" class="form-control" autocomplete="off" placeholder="Nome completo" required>
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="mailusuario" class="form-control" autocomplete="off" placeholder="Email Usuário" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" id="txtSenha" name="senhausuario" class="form-control" autocomplete="off" placeholder="Senha Usuário" required>
        </div>
        <div class="form-group">
            <label>Repetir Senha</label>
            <input type="password" name="senhausuario2" class="form-control" autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)" required>
            <small>Precisa ser igual a senha digitada acima.</small>
        </div>
        
        <div style="text-align: right;">
            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
        </div>
    </form>

    
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('As senhas não conferem!');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
</body>
</html>