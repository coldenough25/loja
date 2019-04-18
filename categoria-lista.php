<?php include("cabecalho.php") ?>
<?php include("conecta.php") ?>
<?php include("banco-categoria.php"); ?>

<?php
  $categorias = listaCategoria($conexao);
?>
<?php
  if (array_key_exists("removido", $_GET)&& $_GET['removido']==true) {?>
    <p id="font-size" class="alert-success">Produto apagado com sucesso!<br></p>
  <?php }?>
<table class="table table-striped table-bordered">
  <tr>
    <td>Nome </td>
  </tr>
  <?php foreach($categorias as $categoria){ ?>
    <tr>
      <td><?=$categoria['nome']?></td>
  </tr>
<?php } ?>
</table>

<?php include("rodape.php") ?>
