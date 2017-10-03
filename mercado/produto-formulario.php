<?php include("cabecalho.php"); ?>
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
			<td><input class="btn btn-primary" type="submit"  value="Enviar"></td>
			</tr>


			</form>
			</table>
<?php include("rodape.php"); ?>