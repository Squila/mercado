<?php include("cabecalho.php");
		include("conecta.php");
		include("funcoes-seguranca.php");
 ?>

<?php
verificaUsuario();

	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria_id = $_POST["categoria_id"];
	if(array_key_exists('usado', $_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}
?>	
<?php include("banco-produto.php"); ?>
<?php	
	//execução da query e verificando SE existe
	if(insereProdutos($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){?>
	<p class="text-success">Produto <?php echo $nome;?>, <?php echo $preco;?> adicionado com sucesso!</p>
	<?php } else{ ?>
	<p class="text-danger">Produto não foi adicionado!</p>
	<?php	
	}
	//fechamento da conexão
	mysqli_close($conexao);
	?>

<?php include("rodape.php"); ?>