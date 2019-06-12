<?php
  session_start();
  include_once("servidor.php");

  if(isset($_GET['enviar'])) {
    if (!empty($_GET['nome']) || !empty($_GET['nascimento']) || !empty($_GET['email']) || !empty($_GET['senha'])) {
      $nome = $_GET['nome'];
      $nascimento = $_GET['nascimento'];
      $email = $_GET['email'];
      $senha = MD5($_GET['senha']);

      $comando = "INSERT INTO usuarios(nome, dataNascimento, email, senha) VALUES('$nome', '$nascimento', '$email', '$senha')";
      $enviar = mysqli_query($conn, $comando);//primeiro conexão depois comando
      if ($enviar) {
        $_SESSION['mensagem'] = "Cadastrado com Sucesso";
        header("location:indexLogin.php");
        exit;
      } else {
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header("location: formCadastro.php");
        exit;
      }
    } else {
      $_SESSION['mensagem'] = "Campo obrigatório não informado";
      header("location:formCadastro.php");
      exit;
    }
  } else {
    header("location:indexLogin.php");
    exit;
  }
?>
