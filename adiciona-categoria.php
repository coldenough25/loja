<!DOCTYPE html>
<?php include "cabecalho.php"; ?>
<?php include "banco-categoria.php"; ?>
<?php include "conecta.php"; ?>
  <p></p>
  <?php

    $nome = $_POST["nome"];
  ?>

  <br><br><br><br>
  <?php
   if (insereCategoria($conexao, $nome)) {?>
  <p class="alert-success">
    Categoria <?= $nome;?> adicionada com sucesso!
  </p>
  <?php } else { ?>
    <p class="alert-danger">
      O categoria <?= $nome;?> não foi adicionado!!!
    </p>
  <?php }

  mysqli_close($conexao);
  ?> <a href="categoria-formulario.php" class="btn btn-primary">Cadastrar outra categoria</a>

<?php include 'rodape.php' ?>
