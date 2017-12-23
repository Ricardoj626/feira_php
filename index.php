<?php require_once("cabecalho.php");

require_once("banco_produto.php");
require_once("logica_usuario.php");


$imagem = $_FILES["imagem"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
$disponivel = $_POST['disponivel'];
$cadastro = $_GET['cadastro'];


if($imagem != NULL) {
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal);
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
        unlink($nomeFinal);

    }
}
else {
    if($cadastro) {
        echo"Você não realizou o upload de forma satisfatória.";
    }

}


if(array_key_exists('disponivel', $_POST)) {
    $disponivel = "true";
} else {
    $disponivel = "false";
}

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $disponivel, $mysqlImg)) { ?>

    <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
    <?php

} else {
    if($cadastro) {
        ?>
        <p class="text-danger">O produto <?= $nome; ?> não foi adicionado</p>
        <?php
    }
}

$produtos = listaProdutos($conexao);

?>
<img src="images/background.jpg" width="50%" >
<div class="col-sm-6">
    <table class="table ">

        <?php
        foreach($produtos as $produto) :
            ?>

            <tr>
                <td>

                    <img src="getImagem.php?PicNum=<?= $produto['id']?>">


                </td>
                <td><?= $produto['nome'] ?></td>
		

                <td><?= $produto['categoria_nome'] ?></td>



                <td>

                    <form  action="comprar.php" method="post">
                <td><input class="form-control" type="number" name="quantidade" /></td>
                </form>
                </td>
            </tr>

        <?php
        endforeach
        ?>
        <tr>
            <td><input type="submit" value="Comprar" /></td>
        </tr>
    </table>

</div>
</div>










<?php include("rodape.php"); ?>
