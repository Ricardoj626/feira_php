<?php
include 'conect.php';
$Id = (int)$_GET['cod'];
$PicNum = $_GET["PicNum"];

$sql = "select imagem from produtos where id = $PicNum";
$exe = mysqli_query($sql);

header("Content-Type: image/jpg");
echo mysqli_result($exe, 0, 'imagem');
?>










<?php
//include ("conect.php");
//
//$PicNum = $_GET["PicNum"];
//
//
//$result=mysqli_query($conexao, "SELECT * FROM produtos WHERE id=$PicNum") or die("Impossível executar a query ");
//$row=mysqli_fetch_object($result);
//Header( "Content-type: image/jpg");
//echo $row->imagem;
//
//?>
<!---->
<?php
//
//require "conect.php";
//
//$sql = "SELECT * FROM produtos WHERE id = 38";
//
//$result = mysqli_query($conexao, $sql) or die(mysqli_error());
//$row = mysqli_fetch_array($result);
//
//echo '<img src="data:image/jpeg;base64' . $row['imagem'] . '" />';
//
//mysqli_close($conexao);
//?>
