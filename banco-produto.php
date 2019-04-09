<?php
  function insereProduto ($conexao, $nome, $preco, $categoria_id, $descricao, $usado, $imagem){
  $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado, imagem) VALUES('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado}, {$imagem})";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function listaProduto($conexao){
  $produtos = array();
  $resultado = mysqli_query($conexao,"select p.*, c.nome as categoria_nome from produtos as p INNER JOIN categorias as c ON p.categoria_id = c.id");
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }return $produtos;
}

function deletaProduto($conexao, $id){
  $query = "DELETE FROM produtos WHERE id = {$id}";
  return mysqli_query($conexao, $query);

}
?>
