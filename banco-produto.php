<?php
  function insereProduto ($conexao, $nome, $preco){
  $query = "INSERT INTO produtos (nome, preco) VALUES('{$nome}', {$preco})";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function listaProduto($conexao){
  $produtos = array();
  $resultado = mysqli_query($conexao,"select * from produtos");
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }return $produtos;
}
?>
