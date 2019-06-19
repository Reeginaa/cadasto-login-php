<?php
  session_start();
  include_once("dbconnect.php");

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
        echo "<script language='javascript' type='text/javascript'>
            alert('E-mail ou senha incorretos!');
            window.location.href='indexLogin.php';
        </script>";
        exit;
      }
    } else {
      echo "<script language='javascript' type='text/javascript'>
          alert('Campo obrigatório não informado');
          window.location.href='indexLogin.php';
      </script>";
      exit;
    }
  } else {
    header("location:index.php");
    exit;
  }
?>
