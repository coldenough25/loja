<!DOCTYPE html>

 <?php include "cabecalho.php"?>
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
<?php include "rodape.php"?>
