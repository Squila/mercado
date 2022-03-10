<?php include("cabecalho.php"); ?>
<?php include("banco-categoria.php"); ?>
<?php include("conecta.php"); 
	include("funcoes-seguranca.php");
?>
<?php 

verificaUsuario();

?>

<?php
$categorias = listaCategorias($conexao);
?>
			<h1>Formulário de Produtos</h1>
			<table class="table">
			<form action="adiciona-produto.php" method="post">
			<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome"></td>
			</tr>
			<tr>
			<td>Preço:</td>
			<td><input class="form-control" type="number" name="preco"></td>
			</tr>
			<tr>
			<td>Descrição:</td>
			<td><textarea name="descricao" class="form-control"></textarea></td>
			</tr>
			<tr>
			<td>Categoria:</td>
			<td>

				<select name="categoria_id" class="form-control">
			<?php foreach($categorias as $categoria):?>
				<option value="<?php echo $categoria['id'];?>">
						<?php echo $categoria["nome"];?>
					</option>
			<?php endforeach;?>
				</select>
			
			</td>

			</tr>
			<tr>
			<td></td>
			<td><input type="checkbox" name="usado" value="true">Usado</td>
			</tr>
			<tr>
			<td><input class="btn btn-primary" type="submit"  value="Enviar"></td>
			</tr>


			</form>
			</table>
<?php include("rodape.php"); ?>