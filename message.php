<?php
  $nome = htmlspecialchars($_POST['nome']);
  $email = htmlspecialchars($_POST['email']);
  $telefone = htmlspecialchars($_POST['telefone']);
  $site = htmlspecialchars($_POST['site']);
  $mensagem = htmlspecialchars($_POST['mensagem']);

  if(!empty($email) && !empty($mensagem)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $destinatario = "rafaelhenrique.ra2@gmail.com"; 
      $assunto = "De: $nome <$email>";
      $corpo = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nSite: $site\n\nMensagem:\n$mensagem\n\nAtenciosamente,\n$nome";
      $remetente = "De: $email";
      if(mail($destinatario, $assunto, $corpo, $remetente)){
         echo "Sua mensagem foi enviada";
      }else{
         echo "Desculpe, falha ao enviar sua mensagem!";
      }
    }else{
      echo "Digite um endereço de e-mail válido!";
    }
  }else{
    echo "Campo de e-mail e mensagem são obrigatórios!";
  }
?>
