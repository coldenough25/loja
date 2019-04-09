<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-produto.php"); ?>

<?php
  $produtos = listaProduto($conexao);
?>
<?php
  if (array_key_exists("removido", $_GET)&& $_GET['removido']==true) {?>
    <p id="font-size" class="alert-success">Produto apagado com sucesso!<br></p>
  <?php }?>
<table class="table table-striped table-bordered">
  <tr>
    <td>Nome </td>
    <td>Preço </td>
    <td>Descrição</td>
    <td>Categoria</td>
    <td>Deletar produto</td>
    <td>USADO</td>
    <td>Imagem</td>
  </tr>
  <?php foreach($produtos as $produto){ ?>
    <tr>
      <td><?=$produto['nome']?></td>
      <td><?=$produto['preco']?></td>
      <td><?=substr($produto['descricao'], 0, 15)?></td>
      <td><?=$produto["categoria_nome"]?></td>
      <td>
        <form action="remove-produto.php" method="post">
          <input type="hidden" name="id" value="<?= $produto["id"]?>">
          <button class="btn btn-danger">Remover</button>
        </form>
      </td>
      <?php foreach ($produtos as $produto) {
        if ($produto['usado'] == 1) {
          $usado = "Sim";
        } else {
          $usado = "Não";
        }
      } ?>
      <td><?=$usado?></td>
      <?php $caminho = "imagens".$produto['imagem']; ?>
      <td><img src="<?=$caminho?>"></td>
  </tr>
<?php } ?>
</table>

<?php include("rodape.php") ?>
