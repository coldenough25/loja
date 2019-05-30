<?php require_once("cabecalho.php") ?>

<form action="enviar-contato.php" method="post">
  <table class="table">
    <tr>
      <td>Nome</td>
      <td><input class="form-control" type="text" name="nome"></td>
    </tr>

    <tr>
      <td>Email</td>
      <td><input class="form-control" type="email" name="email"></td>
    </tr>

    <tr>
      <td>Mensagem</td>
      <td><input class="form-control" type="text" name="mensagem"></td>
    </tr>

    <tr>
      <td>Assunto</td>
      <td>
        <select name="assunto">
          <option value="Sugestão" selected>Sugestão</option>
          <option value="Reclamação">Reclamação</option>
          <option value="Pergunta">Pergunta</option>
        </select>
      </td>
    </tr>

    <tr>
      <td><button type="submit" class="btn btn-primary">Enviar</button></td>
    </tr>
  </table>

<?php require_once("rodape.php") ?>
