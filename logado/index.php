<?php
  session_start();
  require_once("servidor.php");

  if (!empty($_SESSION['mensagem'])) {
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
  }

  if (!empty($_SESSION['nome']) and !empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];
  } else {
    $_SESSION['mensagem'] = "Você não está logado";
    header("location:../");
    exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    Bem-vindo(a), <?=$nome?>, seu código é <?=$id?><br>
    <a href="sair.php"><button>Sair</button></a>
  </body>
</html>
