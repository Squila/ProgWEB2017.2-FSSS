<?php include("cabecalho.php"); 
	include("funcoes-seguranca.php");
?>

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
			<?php
				if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"] == true){
				?>
				<p class="alert-danger">Você não está logado, por isso não pode faznem nem fazer cadastro ou listagem de produtos !</p>
				<?php
			}
			?>


		
			<h1>Bem-vindo</h1>
			<?php
			if(isset($_COOKIE["usuario_logado"])){?>
				<p class="alert-success">Você está logado como <?php echo $_COOKIE["usuario_logado"]?>.</p>
			<?php
			}else{
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
			<?php }?>
<?php include("rodape.php"); ?>
		


