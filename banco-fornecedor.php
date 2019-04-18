<?php
function listaFornecedores($conexao){
  $fornecedores = array();
  $resultado = mysqli_query($conexao,"SELECT * FROM fornecedores");
  while($fornecedor = mysqli_fetch_assoc($resultado)) {
    array_push($fornecedores, $fornecedor);
  }return $fornecedores;
}


 ?>
