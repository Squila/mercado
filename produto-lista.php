<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>
<?php include("banco-categoria.php"); 
	include("funcoes-seguranca.php");
?>
<?php 
				if(isset($_SESSION["success"])){
				?>
				<p class="alert-success"><?php echo $_SESSION["success"];?></p>
				<?php
			}
			unset($_SESSION["success"]);
			?>
<?php

verificaUsuario();
?>

<?php

$produtos = listaProdutos($conexao);
$categorias = listaCategorias($conexao);

?>
<table class="table table-striped table-bordered">
	<tr>
		<td><b>Nome</b></td>
		<td><b>Descrição</b></td>
		<td><b>Preço</b></td>
		<td><b>Categoria</b></td>
		<td><b>Situação</b></td>
	</tr>
<?php

	foreach ($produtos as $produto):
?>	
<tr>
<td><?php echo $produto["nome"];?></td>
<td><?php echo substr($produto["descricao"], 0, 15);?></td>
<td><?php echo $produto["preco"];?></td>
<td><?php echo $produto["categoria_nome"];?></td>
<td><?php if($produto["usado"] == 0){
			echo "novo";
		}else{
			echo "usado";
		}
 ?></td>
 <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?php echo $produto['id'];?>">alterar</a></td>
<td>
	<form action="remove-produto.php" method="post">
	<input type="hidden" name="id" value="<?php echo $produto["id"];?>">
		<button class="btn btn-danger">remover</button>
	</form>
</td>
</tr>
<?php
endforeach;
?>
</table>



<?php include("rodape.php"); ?>
