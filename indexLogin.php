<?php
  session_start();
  require_once("dbconnect.php");
  if(!empty($_SESSION['mensagem'])) {
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="menu"><!--ok-->
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="formCadastro.php">Cadastrar</a></li>
			</ul>
		</div>
    <div class="container">
      <form action="validar.php" method="post" accept-charset="utf-8" class="form-signin">
        <h1 class="form-signin-heading">Login</h1>
        <input type="text" name="email" id="email" placeholder="E-mail"><br>
        <input type="password" name="senha" id="senha" placeholder="Senha"><br>
        <input type="submit" class="button" name="enviar">
        <br><a class="link" href="view/recuperar_senha.php">Esqueceu sua senha?</a>
      </form>
    </div>
  </body>
</html>
