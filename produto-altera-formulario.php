<?php include "cabecalho.php"?>
<?php include "conecta.php" ?>
<?php include "banco-categoria.php";
include "banco-fornecedor.php";
include "banco-produto.php";
  $id = $_GET['id'];
  $produto = buscaProduto($conexao, $id);
  $categorias = listaCategoria($conexao);
  $usado = $produto['usado']?"checked = checked":"";
  $fornecedores = listaFornecedores($conexao);


?>
  <h1>Alterar produto</h1>

<br><br><br><br>
<form action="altera-produto.php" method="post">
  <table>
      <tr>
        <td>Nome  </td>
        <td><input class="form-control" type="text" name="<?=$produto['nome']?>"></td>
      </tr>

      <tr>
        <td>Preço </td>
        <td><input class="form-control" type="number" name="<?=$produto['preco']?>"></td>
      </tr>

      <tr>
          <td>Categoria</td>
          <td>
            <select name="fornecedor_id" class="form-control">
              <?php foreach ($forncedores as $fornecedor):
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
        <td>Descrição</td>
        <td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
        <td><input type="checkbox" name="usado" value="">Usado</td>
      </tr>

      <tr>
        <td>Imagem</td>
        <td><input class="form-control" type="text" name="imagem"></td>
      </tr>

      <tr>
        <td><input class="btn btn-primary" type="submit">Alterar</td>
      </tr>

  </table>
</form>
<?php include "rodape.php"?>
