<?php

$nome = htmlspecialchars($_POST['nome']);
$telefone = htmlspecialchars($_POST['telefone']);
$msg = htmlspecialchars($_POST['msg']);
#enviar as informações para o e-mail
$to = "gezielo.soares@gmail.com";
$subject = "Novo contato pelo site";
$message = "Nome: $nome
            Telefone: $telefone
            Mensagem: $msg";
            $headers = "from : Gezielo.soares@gmail.com";

try{
    mail($to , $subject , $message , $headers);
    echo "Obrigado, em breve entraremos em contato";
} catch(Exception $error){
    echo "Tente novamente mais tarde";
}
