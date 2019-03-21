<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-produto.php"); ?>

<?php
  $produtos = listaProduto($conexao);
?>
<table class="table table-striped table-bordered">
  <tr>
    <td>Nome </td>
    <td>Preço </td>
  </tr>
  <?php foreach($produtos as $produto){ ?>
    <tr>
      <td><?=$produto['nome']?></td>
      <td><?=$produto['preco']?></td>
  </tr>
<?php }; ?>
</table>

<?php include("rodape.php") ?>
