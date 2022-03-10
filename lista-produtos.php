<?php include("cabecalho.php"); 
include("conecta.php");
?>
<?php
$resultado = mysqli_query($conexao, "select * from produtos");
$produto = mysqli_fetch_assoc($resultado);
echo $produto["nome"];





?>
<?php include("rodape.php"); ?>
