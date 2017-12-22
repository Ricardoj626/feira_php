<?php require_once("cabecalho.php");
require_once("banco_produto.php");
require_once("logica_usuario.php");

verificaUsuario();

$produtos = listaProdutos($conexao);
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php }

if(isset($_SESSION["success"])) {
    ?>
    <p class="alert-success"><?= $_SESSION["success"]?></p>
    <?php
    unset($_SESSION["success"]);
}
?>

<table class="table table-striped table-bordered">

    <?php
    foreach($produtos as $produto) :
        ?>

        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= $produto['descricao'] ?></td>
            <td><?= $produto['categoria_nome'] ?></td>
            <td><a class="btn btn-primary" href="formulario_alterar.php?id=<?=$produto['id']?>">alterar</a>
            <td>
                <form action="deletar.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>" />
                    <button class="btn btn-danger">remover</button>
                </form>
            </td>
        </tr>

    <?php
    endforeach
    ?>
</table>
<?php include("rodape.php"); ?>
