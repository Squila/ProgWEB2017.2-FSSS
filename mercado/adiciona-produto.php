<?php include("cabecalho.php");
		include("conecta.php");
 ?>

<?php
	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria_id = $_POST["categoria_id"];
?>	
<?php include("banco-produto.php"); ?>
<?php	
	//execução da query e verificando SE existe
	if(insereProdutos($conexao, $nome, $preco, $descricao, $categoria_id)){?>
	<p class="text-success">Produto <?php echo $nome;?>, <?php echo $preco;?> adicionado com sucesso!</p>
	<?php } else{ ?>
	<p class="text-danger">Produto não foi adicionado!</p>
	<?php	
	}
	//fechamento da conexão
	mysqli_close($conexao);
	?>

<?php include("rodape.php"); ?>