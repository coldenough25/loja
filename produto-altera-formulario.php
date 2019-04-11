<?php include "cabecalho.php"?>
<?php include "conecta.php" ?>
<?php include "banco-categoria.php";
include "banco-produto.php";
  $id = $_GET['id'];
  $produto = buscaProduto($conexao, $id);
  $categorias = listaCategoria($conexao);

?>
  <h1>Alterar produto</h1>

<br><br><br><br>
<h1>Formulário de cadastro</h1>
<form action="produto-altera-formulario.php" method="post">
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
          <td><select name="categoria_id" class="form-controle" value="<?=$categoria['id']?>">
          <?php foreach ($categorias as $categoria){?>
            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>

          <?php }?>
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
