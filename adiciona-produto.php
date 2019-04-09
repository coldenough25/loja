
<?php include "cabecalho.php"?>
<?php include "banco-produto.php" ?>
<?php include "conecta.php" ?>


  <?php
  $usado = $_POST['usado'];
  if (array_key_exists('usado', $_POST)) {
    $usado = "true";
  }else{
    $usado = "false";
  }

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];
    $imagem = $_POST["imagem"];
    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado, $imagem)) {
      # code...
    }
  ?>

  <br><br><br><br>
  <?php
   if (insereProduto($conexao, $nome, $preco, $categoria_id, $descricao)) {?>
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
