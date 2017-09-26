<?php include("cabecalho.php");
		include("conecta.php");
 ?>

<?php
	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
?>	
<?php include("banco-produto.php"); ?>
<?php	
	//execução da query e verificando SE existe
	if(insereProdutos($conexao, $nome, $preco)){?>
	<p class="text-success">Produto <?php echo $nome;?>, <?php echo $preco;?> adicionado com sucesso!</p>
	<?php } else{ ?>
	<p class="text-danger">Produto não foi adicionado!</p>
	<?php	
	}
	//fechamento da conexão
	mysqli_close($conexao);
	?>

<?php include("rodape.php"); ?>