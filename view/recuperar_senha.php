<?php
  session_start();
  include('../libs/functions.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recuperação de Senha</title>
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
      <form action="../PHPMailer/enviar.php" method="post" class="form-recuperacao">
        <h1 class="form-recuperacao-heading">Recuperação de Senha</h1>
        <input type="email" id="email" name="email" placeholder="Informe o e-mail."></br>
        <input type="submit" class="button" id="botao-enviar" value="Enviar">
      </form>
    </div>
  </body>
</html>
