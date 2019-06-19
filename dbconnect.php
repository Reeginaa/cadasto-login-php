<?php
  $ip = "127.0.0.1";
  $login = "root";
  $senha = "";
  $banco = "soft";

  $conn = mysqli_connect($ip, $login, $senha, $banco);

  //checar se conectou
  if ($conn) {
  } else {
    echo "Erro de conexão.";
  }
?>
