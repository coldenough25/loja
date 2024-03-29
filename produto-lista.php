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
    <td>Imagem</td>
    <td>Nome </td>
    <td>Preço </td>
    <td>Descrição</td>
    <td>Categoria</td>
    <td>USADO</td>
    <td>Alterar produto</td>
    <td>Deletar produto</td>
  </tr>
  <?php foreach($produtos as $produto){ ?>
    <tr>
      <?php $caminho = $produto['imagem']; ?>
      <td><img src="<?=$caminho?>"></td>
      <td><?=$produto['nome']?></td>
      <td><?=$produto['preco']?></td>
      <td><?=substr($produto['descricao'], 0, 50)?></td>
      <td><?=$produto["categoria_nome"]?></td>
      <?php foreach ($produtos as $produto) {
        if ($produto['usado'] == 1) {
          $usado = "Sim";
        } else {
          $usado = "Não";
        }
      } ?>
      <td><?=$usado?></td>

      <td><form action="produto-altera-formulario.php" method="post">
            <input type="hidden" name="id" value="<?=$produto["id"]?>">
            <button class="btn btn-primary">Alterar</button>
          </form>
      </td>

      <td>
        <form action="remove-produto.php" method="post">
          <input type="hidden" name="id" value="<?= $produto["id"]?>">
          <button class="btn btn-danger">Remover</button>
        </form>
      </td>
  </tr>
<?php } ?>
</table>

<?php include("rodape.php") ?>
