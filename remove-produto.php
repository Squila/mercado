<?php
include("banco-produto.php");
 include("conecta.php");
 include("cabecalho.php");
 include("funcoes-seguranca.php");
$id = $_POST["id"];
removeProduto($conexao, $id);
?>
<?php
$_SESSION["success"] =  "Produto removido com sucesso!";
?>
<?php
header("Location: produto-lista.php");
die();
?>
<?php 
include("rodape.php");
?>