<?php include "cabecalho.php" ?>
<?php include "conecta.php"?>
<?php include "banco-categoria.php" ?>

<?php
  $id = $_POST["id"];
  deletaCategoria($conexao, $id);?>
  <p class="text-success">Categoria <?=$id?> removida<br></p> <?php
  header("Location: categoria-lista.php?removido=true");
  die();
 ?>

<?php include "rodape.php"; ?>
