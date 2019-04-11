<?php include "cabecalho.php"?>
<?php include "conecta.php" ?>
<?php include "banco-categoria.php";
  $categorias = listaCategoria($conexao);
?>

<br><br><br><br>
<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
  <table>
      <tr>
        <td>Nome  </td>
        <td><input class="form-control" type="text" name="nome"></td>
      </tr>

      <tr>
        <td>Preço </td>
        <td><input class="form-control" type="number" name="preco"></td>
      </tr>

      <tr>
          <td>Categoria</td>
          <td><select name="categoria_id" value="<?=$categoria['id']?>">
          <?php foreach ($categorias as $categoria){?>
            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>

          <?php }?>
        </td>
      </tr>

      <tr>
        <td>Descrição</td>
        <td><textarea name="descricao" class="form-control"></textarea></td>
        <td><input type="checkbox" name="usado" value="true">Usado</td>
      </tr>

      <tr>
        <td>Imagem</td>
        <td><input class="form-control" type="text" name="imagem"></td>
      </tr>

      <tr>
        <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
      </tr>

  </table>
</form>
<?php include "rodape.php"?>
