<?php
require_once("conect.php");

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;

}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}


function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $disponivel, $mysqlImg) {
    $query = "insert into produtos (nome, preco, descricao, categoria_id, disponivel, imagem) values ('{$nome}', {$preco}, '{$descricao}', $categoria_id, $disponivel, '{$mysqlImg}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;

}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $disponivel) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', 
        categoria_id= {$categoria_id}, disponivel = {$disponivel} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}
