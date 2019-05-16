<?php
  include ("conecta.php");
  include ("banco-usuario.php");
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $usuario = buscaUsuario($conexao, $email, $senha);
  var_dump($usuario);
 ?>
