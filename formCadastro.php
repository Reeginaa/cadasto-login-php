<?php
  session_start();
  include_once("servidor.php");
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
    <form action="cadastrar.php" method="get" accept-charset="utf-8">
      Nome Completo<br>
      <input type="text" name="nome"><br>
      Data de Nascimento<br>
      <input type="date" name="nascimento"><br>
      E-mail<br>
      <input type="text" name="email"><br>
      Senha<br>
      <input type="password" name="senha"><br>
      <input type="submit" name="enviar"value="Cadastrar">
    </form>
    <br><a href="indexLogin.php"><button>Voltar</button></a>
  </body>
</html>
