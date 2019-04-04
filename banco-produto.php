<?php
  function insereProduto ($conexao, $nome, $preco, $categoria_id, $descricao){
  $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id) VALUES('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
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

function deletaProduto($conexao, $id){
  $query = "DELETE FROM produtos WHERE id = {$id}";
  return mysqli_query($conexao, $query);

}
?>
