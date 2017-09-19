<?php include("cabecalho.php"); ?>
			<h1>Formulário de Produtos</h1>
			<table class="table">
			<form action="adiciona-produto.php">
			<tr>
			<td>Nome:</td>
			<td><input class="form-control" type="text" name="nome"></td>
			</tr>
			<tr>
			<td>Preço:</td>
			<td><input class="form-control" type="number" name="preco"></td>
			</tr>
			<tr>
			<td><input class="btn btn-primary" type="submit"  value="Enviar"></td>
			</tr>


			</form>
			</table>
<?php include("rodape.php"); ?>