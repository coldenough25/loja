<?php include "cabecalho.php" ?>
<?php include "conecta.php"?>
<?php include "banco-produto.php" ?>

<?php
  $id = $_POST["id"];
  deletaProduto($conexao, $id);?>
  <p class="text-success">Produto <?=$id?> removido<br></p> <?php
  header("Location: produto-lista.php?removido=true");
  die();
 ?>

<?php include "rodape.php"; ?>
