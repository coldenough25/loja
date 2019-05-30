<?php
function logaUsuario($email) {
  return $_SESSION["usuario_logado"]= $email;
}
function verificaUsuario() {
  if(!usuarioEstaLogado()) {
    header("Location: index.php?falhaDeSeguranca=true");
    die();
  }
}

function usuarioEstaLogado() {
  return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado() {
  return $_SESSION[“usuario_logado”];
}
function logout(){
  session_destroy();
}

?>
