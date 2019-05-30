<?php include "cabecalho.php"?>
<?php include "conecta.php" ?>
<?php include "banco-categoria.php";
include "banco-fornecedor.php";
include "banco-produto.php";
  $id = $_POST['id'];
  $produto = buscaProduto($conexao, $id);
  $categorias = listaCategoria($conexao);
  $usado = $produto['usado']?"checked = checked":"";
  $fornecedores = listaFornecedores($conexao);


?>
  <h1>Alterar produto</h1>

<br><br><br><br>
<form action="altera-produto.php" method="post">
  <table class="table">
    <input type="hidden" name="id" value="<?=$produto['id']?>">
      <tr>
        <td>Nome  </td>
        <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
      </tr>

      <tr>
        <td>Preço </td>
        <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"></td>
      </tr>

      <tr>
          <td>Fornecedor</td>
          <td>
            <select name="fornecedor_id" class="form-control">
              <?php foreach ($fornecedores as $fornecedor):
              $esseFornecedor = $produto['fonecedor_id'] == $fornecedor['id'];
              $selecao = $esseFornecedor ? "selected=selected" : "";?>
              <option value="<?=$fornecedor['id']?>"<?=$selecao ?>>
                <?=$fornecedor['nome'] ?>
              </option>

            <?php endforeach?>
          </select>
        </td>
      </tr>

      <tr>
          <td>Categoria</td>
          <td>
            <select name="categoria_id" class="form-control">
              <?php foreach ($categorias as $categoria):
              $essaCategoria = $produto['categoria_id'] == $categoria['id'];
              $selecao = $essaCategoria ? "selected='selected''" : "";?>
              <option value="<?=$categoria['id']?>"<?=$selecao ?>>
                <?=$categoria['nome'] ?>
              </option>

            <?php endforeach?>
          </select>
        </td>
      </tr>

      <tr>
        <td>Descrição</td>
        <td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
        <td><input type="checkbox" name="usado" value="">Usado</td>
      </tr>

      <tr>
        <td>Imagem</td>
        <td><input class="form-control" type="text" name="imagem" value="<?=$produto['imagem']?>"></td>
      </tr>

      <tr>
        <td><input class="btn btn-primary" type="submit" value="Alterar"></td>
      </tr>

  </table>
</form>
<?php include "rodape.php"?>
