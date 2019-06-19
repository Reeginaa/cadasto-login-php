<?php
session_start();
include 'dbconnect.php';

	$email 		= $_SESSION['email'];
	$hash		= $_SESSION['hash'];
	$new_pass	= sha1(md5($_POST['pass']));

	if ($email == "" || $email == null || $hash == "" || $hash == null) {
		unset($_SESSION['recovery']);
		echo "<script language='javascript' type='text/javascript'>
				alert('Essa chave de alteração é inválida ou expirou. Tente novamente!');
				window.location.href='../view/recuperar_senha.php';
			</script>";
		die();
	} else {
		$query = "UPDATE usuarios SET hash_recovery = NULL, senha = '$new_pass' WHERE email = '$email' AND hash_recovery = '$hash'";
		$update = mysqli_query($conn, $query);
		$query_select = "SELECT email, hash_recovery FROM usuarios WHERE email = '$email' AND hash_recovery ='' OR hash_recovery = NULL";
		$result = mysqli_query($conn, $query_select);
		$row = mysqli_num_rows($result); //Conta o nº de linhas que combinam com a consulta
		$log_name = mysqli_fetch_assoc($result); //

		if ($row == 1) {
			unset($_SESSION['recovery']);
            echo "<script language='javascript' type='text/javascript'>
					alert('Senha alterada com sucesso');
					window.location.href='../indexLogin.php';
				</script>";
			die();
		} else {
			unset($_SESSION['recovery']);
			echo "<script language='javascript' type='text/javascript'>
				alert('Essa chave de alteração é inválida ou expirou. Tente novamente!');
				window.location.href='../view/recuperar_senha.php';
			</script>";
			exit;
		}
	}
?>
