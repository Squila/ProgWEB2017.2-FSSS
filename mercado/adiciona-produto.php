<?php include("cabecalho.php"); ?>
<?php
	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
	//cria a conexão com o banco
	$conexao = mysqli_connect('localhost', 'root', '', 'mercado');
	//criando a query de inserção
	$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
	//execução da query e verificando SE existe
	if(mysqli_query($conexao, $query)){?>
	<p class="alert-success">Produto <?php echo $nome;?>, <?php echo $preco;?> adicionado com sucesso!</p>
	<?php } else{ ?>
	<p class="alert-danger">Produto não foi adicionado!</p>
	<?php	
	}
	//fechamento da conexão
	mysqli_close($conexao);
	?>

<?php include("rodape.php"); ?>