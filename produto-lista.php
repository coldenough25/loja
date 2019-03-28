<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-produto.php"); ?>

<?php
  $produtos = listaProduto($conexao);
?>
<?php
  if (array_key_exists("removido", $_GET)&& $_GET['removido']==true) {?>
    <p class="alert-success">Produto apagado com sucesso!<br></p>
  <?php }?>
<table class="table table-striped table-bordered">
  <tr>
    <td>Nome </td>
    <td>Preço </td>
    <td>Deletar produto</td>
  </tr>
  <?php foreach($produtos as $produto){ ?>
    <tr>
      <td><?=$produto['nome']?></td>
      <td><?=$produto['preco']?></td>
      <td><a href="remove-produto.php ?id=<?= $produto["id"]?>" class="text-danger">Remover</a></td>
  </tr>
<?php }; ?>
</table>

<?php include("rodape.php") ?>
