<!DOCTYPE html>

 <?php include "cabecalho.php"?>
 <br><br><br><br>
        <?php if (isset($_GET["login"])&&($_GET["login"]==1)){?>
          <p class="alert-success">Logado com sucesso!</p>
          <h1>Bem vindo!</h1>
        <?php } if(isset($_GET["login"])&&($_GET["login"]==0)){?>
          <p class="alert-danger">Usuário ou senha inválidos!</p>
        <?php }
        if(isset($_COOKIE["usuario_logado"])){?>
          <p class="text-success">Você está logado como <?=$_COOKIE["usuario_logado"]?></p>
        <?php }else{?>
        <h1>Bem-vindo!</h1>
        <form action="login.php" method="post">
          <table>
            <tr>
              <td>Nome do Usuário</td>
              <td><input type="text" name="email"></td>
            </tr>
            <tr>
              <td>Senha</td>
              <td><input type="password" name="senha"></td>
            </tr>
            <tr>
              <td><button type="submit" class="btn btn-primary">Login</button></td>
            </tr>
          </table>
        </form>
      <?php } ?>
<?php include "rodape.php"?>
