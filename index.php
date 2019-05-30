<!DOCTYPE html>

 <?php include ("cabecalho.php");
if(isset($_GET["logout"]) && $_GET["logout"]==true) {?>
<p class="alert-danger">Deslogado com sucesso</p>

<?php }
If (usuarioEstaLogado()) { ?>
<p class="text-success">Você está logado como <?= usuarioLogado()?><a href="logout.php">Deslogar</a></p><?php
} else {?>

<?php
if (isset($_GET["login"]) && ($_GET["login"] == true)){?>
  <p class="alert-success" > Logado com sucesso! </p>
  <?php }
if (isset($_GET["login"]) && ($_GET["login"] == false)){?>
  <p class="alert-danger" > Usuário ou senha inválida! </p>
  <?php }
if (isset($_COOKIE["usuario_logado"])){ ?>
  <p class="text-sucess" > Você está logado como <?=$_COOKIE["usuário_logado"]?> </p>
  <?php
} else{
 ?>
 <br><br><br><br>
        <h1>Bem-vindo!</h1>
        <form action="login.php" method="post">
          <table>
            <tr>
              <td>Email</td>
              <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
              <td>Senha</td>
              <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
              <td><button type="submit" class="btn btn-primary">Login</button></td>
            </tr>
          </table>

        </form>
<?php }}include ("rodape.php");?>
