<?php include("cabecalho.php"); ?>
<?php
	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
	//cria a conexão com o banco
	$conexao = mysqli_connect('localhost', 'root', '', 'mercado');
	function insereProdutos($conexao, $nome, $preco){
		$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
		return mysqli_query($conexao, $query);
	}
	
	
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