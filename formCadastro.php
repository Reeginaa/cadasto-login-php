<?php
  session_start();
  include_once("dbconnect.php");
  if (!empty($_SESSION['mensagem'])) {
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
  }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="indexLogin.php">Entrar</a></li>
			</ul>
		</div>
    <div class="container">
      <form action="cadastrar.php" method="post" accept-charset="utf-8" class="form-cadastro">
        <h1 class="form-cadastro-heading">Cadastro</h1>
        <input type="text" name="nome" id="nome" placeholder="Nome Completo"><br>
        <input type="date" name="nascimento" id="nascimento" placeholder="Data de Nascimento"><br>
        <input type="mail" name="email" id="email" placeholder="E-mail"><br>
        <input type="password" name="senha" id="senha" placeholder="Senha"><br>
        <input type="submit" class="button" name="enviar" value="Cadastrar">
      </form>
    </div>
  </body>
</html>
