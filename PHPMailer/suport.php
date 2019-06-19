<?php
include('../libs/user_pass_recovery.php');

    $email      = 'gp.recovery.mail@gmail.com';
    $password   = 'Rec_Pass_9876';
    $email_to   = $email_X;
    $system     = 'Gerenciador de Leitura';
    $subject    = 'Recupere sua senha de acesso!';
    $url        = 'http://localhost/engSoftware/libs/user_change_data_recovery.php?hash=';
    $corpo      = 'Para trocar sua senha, clique no link abaixo:<br/><br/>' .$url . $hash . '<br/><br/>
        Caso não tenha solicitado, verifique sua conta pois outra pessoa pode estar tentando acessá-la';
?>
