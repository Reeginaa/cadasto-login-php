<?php
  session_start();
  include_once("dbconnect.php");

  if(isset($_GET['enviar'])) {
    if (!empty($_GET['nome']) || !empty($_GET['nascimento']) || !empty($_GET['email']) || !empty($_GET['senha'])) {
      $nome = $_GET['nome'];
      $nascimento = $_GET['nascimento'];
      $email = $_GET['email'];
      $senha = MD5($_GET['senha']);

      $comando = "INSERT INTO usuarios(nome, dataNascimento, email, senha) VALUES('$nome', '$nascimento', '$email', '$senha')";
      $enviar = mysqli_query($conn, $comando);//primeiro conexão depois comando
      if ($enviar) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Cadastrado com Sucesso!');
            window.location.href='indexLogin.php';
        </script>";
        exit;
      } else {
        echo "<script language='javascript' type='text/javascript'>
            alert('Erro ao cadastrar!');
            window.location.href='formCadastro.php';
        </script>";
        exit;
      }
    } else {
      echo "<script language='javascript' type='text/javascript'>
          alert('Campo obrigatório não informado!');
          window.location.href='formCadastro.php';
      </script>";
      exit;
    }
  } else {
    header("location:indexLogin.php");
    exit;
  }
?>
