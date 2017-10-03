<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>
<?php include("banco-categoria.php"); ?>
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
	</tr>
<?php

	foreach ($produtos as $produto):
?>	
<tr>
<td><?php echo $produto["nome"];?></td>
<td><?php echo substr($produto["descricao"], 0, 15);?></td>
<td><?php echo $produto["preco"];?></td>
<td><?php echo $produto["categoria_id"];?></td>
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
