<?php include "cabecalho.php"?>
<?php include "conecta.php" ?>
<?php include "banco-categoria.php";
?>

<br><br><br><br>
<h1>Cadastro de categoria</h1>
<form action="adiciona-categoria.php" method="post">
  <table>
      <tr>
        <td>Nome  </td>
        <td><input class="form-control" type="text" name="nome"></td>
      </tr>

      <tr>
        <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
      </tr>

  </table>
</form>
<?php include "rodape.php"?>
