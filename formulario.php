<?php require_once("cabecalho.php");
require_once("banco_categoria.php");
require_once("logica_usuario.php");

verificaUsuario();

$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";

$categorias = listaCategorias($conexao); ?>

<h1>Formulário de cadastro</h1>
<form action="index.php?cadastro=true" method="post"  enctype="multipart/form-data">
    <table class="table">
        <?php
        require_once("formulario_base.php")
        ?>

        <tr>
            <td><input type="submit" value="Cadastrar" /></td>
        </tr>

    </table>

</form>

<?php include("rodape.php"); ?>
