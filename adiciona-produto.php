
<?php include "cabecalho.php"?>
<?php include "banco-produto.php" ?>
<?php include "conecta.php" ?>


  <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
  ?>

  <br><br><br><br>
  <?php
   if (insereProduto($conexao, $nome, $preco)) {?>
  <p class="alert-success">
    Produto <?= $nome;?>, de preço <?= $preco;?> adicionado com sucesso!
  </p>
  <?php } else { ?>
    <p class="alert-danger">
      O produto <?= $nome;?> não foi adicionado!!!
    </p>
  <?php }

  mysqli_close($conexao);
  ?> <a href="produto-formulario.php" class="btn btn-primary">Cadastrar outro produto</a> <?php
  include "rodape.php"?>
