<?php
  session_start();
  include('../libs/functions.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alteração da Senha</title>
    <script type="text/javascript" src="../libs/functions/js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <div id="menu"><!--ok-->
			<ul>
				<li><a href="../home.php">Home</a></li>
				<li><a href="../formCadastro.php">Cadastrar</a></li>
        <li><a href="../indexLogin.php">Entrar</a></li>
			</ul>
		</div>
    <div class="container">
      <form action="../libs/user_pass_recovery_mail.php" onsubmit="return validarSenha(this)" method="post" class="form-alteracao">
        <h1 class="form-alteracao-heading">Alteração</h1>
        <input type="password" name="pass" id="pass" placeholder="Informe a nova senha"></br>
        <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirme a senha"></br>
        <input type="submit" class="button" name="botao-enviar" id="botao-enviar" value="Alterar">
        <input type="reset" class="button" name="botao-cancelar" id="botao-cancelar" value="Cancelar">
      </form>
    </div>
  </body>
</html>
