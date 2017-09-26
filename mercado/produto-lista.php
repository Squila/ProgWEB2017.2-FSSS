<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>
<?php



$produtos = listaProdutos($conexao);

?>
<table class="table table-striped table-bordered">
	<tr>
		<td>Nome</td>
		<td>Preço</td>
	</tr>
<?php

	foreach ($produtos as $produto):
?>	
<tr>
<td><?php echo $produto["nome"];?></td>
<td><?php echo $produto["preco"];?></td>
<td><a class="text-alert" href="remove-produto.php?id=<?php echo $produto["id"];?>">remover</a></td>
</tr>
<?php
endforeach;
?>
</table>



<?php include("rodape.php"); ?>
