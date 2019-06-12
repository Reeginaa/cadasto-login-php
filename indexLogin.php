<?php
  session_start();
  require_once("servidor.php");
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
    <form action="validar.php" method="post" accept-charset="utf-8">
      E-mail<br>
      <input type="text" name="email"><br>
      Senha<br>
      <input type="password" name="senha"><br>
      <input type="submit" name="enviar">
    </form>
    <br><a href="formCadastro.php"><button>Cadastrar</button></a>
  </body>
</html>
