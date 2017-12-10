<?php
# alterar a variavel abaixo colocando o seu email

$destinatario = "matt_fachini@hotmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['msg'];


 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "RECEBIDO UMA NOVA MENSAGEM - FACULDADE GENERICA" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "msg: " . $msg . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:index.html");