<?php include("cabecalho.php"); ?>
			<h1>Bem-vindo</h1>

			<?php
			if(isset($_GET["login"]) && $_GET["login"] == 0){
				?>
				<p class="alert-danger">Usuários e senha inválidos!</p>
				<?php
				}if(isset($_GET["login"]) && $_GET["login"] == true){
				?>
				<p class="alert-success">Você está logado!</p>
				<?php
			}
			?>

		


			<form action="login.php"  method="post">
			<table class="table">
			<tr>
			<td>E-mail:</td>
			<td><input class="form-control" type="text" name="email"></td>
			</tr>
			<tr>
			<td>Senha:</td>
			<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
			<td><input class="btn btn-primary" type="submit"  value="Enviar"></td>
			</tr>
			</table>
			</form>
<?php include("rodape.php"); ?>
		


