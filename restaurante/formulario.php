<?php
$para = 'eduardocsimoes81@gmail.com';
$assunto = $_REQUEST['selecaoform'];

$email = $_REQUEST['inputEmail'];
$header = 'Content-Type: text/html; charset = utf-8 From $email';

$nome = $_REQUEST['inputNome'];
$sobrenome = $_REQUEST['inputSobrenome'];
$mensagem = $_REQUEST['textarea'];
$corpo = '<strong>Mensagem de Contato</strong><>br';
$corpo .= '<br><strong>Nome: </strong> $nome';
$corpo .= '<br><strong>Sobrenome: </strong> $sobrenome';
$corpo .= '<br><strong>Email: </strong> $email';
$corpo .= '<br><strong>Mensagem: </strong> $mensagem';

mail($para,$assunto,$mensagem,$header);
header('location:faleconosco.php?msg=enviada');