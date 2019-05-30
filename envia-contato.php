<?php
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];
  $assunto = $_POST["assunto"]
  require_once("PHPMailerAutoload.php");

  $mail = new PHPMailer();
  $mail ->isSMTP();
  $mail ->Host='smtp.gmail.com';//servidor de smtp, para cada servidor é diferente
  $mail ->Port= 587;
  $mail->SMTPSecure = 'tls'
  $mail ->SMTPAuth = true; //autenticação
  $mail ->Username = "pedrolechner10@gmail.com";
  $mail ->Password = "senha";

  $mail ->setFrom("pedrolechner10@gmail.com", "WEB 2");
  $mail ->addAddress("pedrolechner10@gmail.com")//opcional
  $mail ->Subject="Email do contato";
  $mail ->msgHTML("<html>De: {$nome}<br> Email: {$email}<br>Assunto: {$assunto}<br>Mensagem: {$mensagem}");
  $mail ->AltBody = "De: {$nome}\nEmail: {$assunto}\nMensagem: {$mensagem}";
  if($mail->send()){
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location:index.php");
  }else{
    $_SESSION["danger"] = "Erro ao enviar mensagem" . $mail ->ErrorInfo;
    header("Location:contato.php");
  }
  die();
 ?>
