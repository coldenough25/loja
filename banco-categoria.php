<?php
function listaCategoria($conexao){
  $categorias = array();
  $resultado = mysqli_query($conexao,"SELECT * FROM categorias");
  while($categoria = mysqli_fetch_assoc($resultado)) {
    array_push($categorias, $categoria);
  }return $categorias;
}

function insereCategoria($conexao, $nome){
  $query = "INSERT INTO categorias (nome) VALUES('{$nome}')";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function deletaCategoria($conexao, $id){
  $query = "DELETE FROM categorias WHERE id = {$id}";
  return mysqli_query($conexao, $query);

}

 ?>
