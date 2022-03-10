<?php include("cabecalho.php"); ?>
<?php include("banco-categoria.php"); ?>
<?php include("banco-produto.php"); ?>
<?php include("conecta.php"); ?>
<?php
$id = $_GET["id"];
$produto = buscaProdutos($conexao, $id);
$categorias =listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
			<h1>Formulário de Produtos</h1>
			<table class="table">
			<form action="altera-produto.php" method="post">
			<input type="hidden" name="id" value="<?php echo $produto['id']?>">
			<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome" value="<?php echo $produto['nome'];?>"></td>
			</tr>
			<tr>
			<td>Preço:</td>
			<td><input class="form-control" type="number" name="preco" value="<?php echo $produto['preco'];?>"></td>
			</tr>
			<tr>
			<td>Descrição:</td>
			<td><textarea name="descricao" class="form-control"><?php echo $produto['descricao'];?>
			</textarea></td>
			</tr>
			<tr>
			<td>Categoria:</td>
			<td>

				<select name="categoria_id" class="form-control">
			<?php foreach($categorias as $categoria):?>
				<?php
				$essaEhcategoria = $produto['categoria_id'] == $categoria['id'];
				$selecao = $essaEhcategoria ? "selected='selected'" : "";
				?>
				<option value="<?php echo $categoria['id'];?>" <?php echo $selecao;?>>
						<?php echo $categoria["nome"];?>
					</option>
			<?php endforeach;?>
				</select>
			
			</td>

			</tr>
			<tr>
			<td></td>
			<td><input type="checkbox" name="usado" value="true" <?php echo $usado;?>>Usado</td>
			</tr>
			<tr>
			<td><input class="btn btn-primary" type="submit"  value="Enviar"></td>
			</tr>


			</form>
			</table>
<?php include("rodape.php"); ?>