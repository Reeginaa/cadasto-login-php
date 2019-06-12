<?php
  session_start();
  include_once("servidor.php");

  if (isset($_POST['enviar'])) {
    if (!empty($_POST['email']) || !empty($_POST['senha'])) {
      $email = $_POST['email'];
      $senha = MD5($_POST['senha']);

      $comando = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
      $enviar = mysqli_query($conn, $comando);
      $resultado = mysqli_fetch_assoc($enviar);
      if ($resultado) {
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['id'] = $resultado['id'];
        header("location:logado/");
        exit;
      } else {
        $_SESSION['mensagem'] = "E-mail ou Senha incorretos";
        header ("location:indexLogin.php");
        exit;
      }
    } else {
      $_SESSION['mensagem'] = "Campo obrigatório não informado";
      header ("location:indexLogin.php");
      exit;
    }
  } else {
    header("location:index.php");
    exit;
  }
?>
