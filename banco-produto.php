<?php
  function insereProduto ($conexao, $nome, $preco, $categoria_id, $descricao, $usado, $imagem){
  $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado, imagem) VALUES('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado}, '{$imagem}')";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function listaProduto($conexao){
  $produtos = array();
  $query = "SELECT p.*, c.nome AS categoria_nome FROM produtos AS p INNER JOIN categorias AS c ON p.categoria_id = c.id";
  $resultado = mysqli_query($conexao, $query);
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}

function removeProduto($conexao, $id){
  $query = "DELETE FROM produtos WHERE id = {$id}";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;

}

function buscaProduto($conexao, $id){
  $query = "SELECT * FROM produtos WHERE id = {$id}";
  $resultado = mysqli_query($conexao, $query);
  return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado, $imagem, $fornecedor_id){
  $query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id= {$categoria_id}, usado = {$usado} , imagem = '{$imagem}', fornecedor_id = {$fornecedor_id} WHERE id = '{$id}'";
  return mysqli_query($conexao, $query);
}
?>
