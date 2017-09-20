<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php

function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

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
</tr>
<?php
endforeach;
?>
</table>



<?php include("rodape.php"); ?>
