<?php
session_start();
include 'dbconnect.php';

	$email_X = $_POST['email'];

	if ($email_X == "" || $email_X == null) {
		echo "<script language='javascript' type='text/javascript'>
				alert('Campo e-mail deve ser preenchido!');
				window.location.href='../view/recuperar_senha.php';
			</script>";
	} else {
		$query_select = "SELECT email, hash_recovery FROM usuarios WHERE email = '$email_X'";
		$select = mysqli_query($conn, $query_select);
		$array = mysqli_fetch_array($select);
		$logarray = $array['email'];

		if ($logarray != $email_X) {
			echo "<script language='javascript' type='text/javascript'>
					alert('E-mail não cadastrado!');
					window.location.href='../view/recuperar_senha.php';
				</script>";
			die();
		} else {
			$hash = substr(md5(date('Y-m-d H:i:s')), 16, 10);
			$query = "UPDATE usuarios SET hash_recovery = '$hash' WHERE email = '$email_X'";
			$update = mysqli_query($conn, $query);
		}
	}
?>
