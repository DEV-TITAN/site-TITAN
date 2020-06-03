<?php

$remetente    = 'From: contato@titanci.com.br';
$destinatario = 'contato@titanci.com.br';
$nome         = utf8_decode($_POST['nome']);
$email        = utf8_decode($_POST['email']);
$assunto      = utf8_decode($_POST['assunto']);
$mensagem     = utf8_decode($_POST['mensagem']);
$alerta       = 'Sua mensagem foi enviada. Obrigado!';
$corpo          = "

Nome: ".$nome."
Email: ".$email."
Assunto: ".$assunto."
Mensagem: "
.$mensagem."";

mail($destinatario, $assunto, $corpo, $remetente);
echo $alerta;
?>