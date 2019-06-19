<?php
session_start();
include 'dbconnect.php';

    $hash = $_GET['hash'];

    if ($hash == "" || $hash == NULL) {
        echo "<script language='javascript' type='text/javascript'>
            alert('Essa chave de alteração é inválida ou expirou. Tente novamente!');
            window.location.href='../view/recuperar_senha.php';
        </script>";
    } else {
        $query_select = "SELECT email, hash_recovery FROM usuarios WHERE hash_recovery = '$hash'";
        $result = mysqli_query($conn, $query_select);    
        $row = mysqli_num_rows($result); //Conta o nº de linhas que combinam com a consulta
        $log_name = mysqli_fetch_assoc($result); //

        if ($row == 1) {
            $_SESSION['recovery'] = true;
            $_SESSION['email'] = $log_name['email'];
            $_SESSION['hash'] = $log_name['hash_recovery'];
            header('location: ../view/recuperar_senha_alteracao.php');
            exit;
        } else {
            echo "<script language='javascript' type='text/javascript'>
                alert('Essa chave de alteração é inválida ou expirou. Tente novamente!');
                window.location.href='../view/recuperar_senha.php';
            </script>";
        }
    }
?>
