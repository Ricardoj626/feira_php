<?php require_once("cabecalho.php");
require_once("banco_categoria.php");
require_once("banco_produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$disponivel = $produto['disponivel'] ? "checked='checked'" : "";
?>
<h1>Alterando produto</h1>
<form action="altera_produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>">
    <table class="table">
        <?php
        require_once("formulario_base.php");
        ?>

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
