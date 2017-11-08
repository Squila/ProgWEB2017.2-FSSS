<?php include("cabecalho.php"); 
	include("funcoes-seguranca.php");
?>

			<?php 
				if(isset($_SESSION["success"])){
				?>
				<p class="alert-success"><?php echo $_SESSION["success"];?></p>
				<?php
			}
			unset($_SESSION["success"]);
			?>

			
			
			<?php
				if(isset($_SESSION["danger"])){
				?>
				<p class="alert-danger"><?php echo $_SESSION["danger"];?></p>
				<?php
			}
			unset($_SESSION["danger"]);
			?>
			

		
			<h1>Bem-vindo</h1>
			<?php
			if(isset($_SESSION["usuario_logado"])){?>
				<p class="alert-success">Você está logado como <?php echo $_SESSION["usuario_logado"]?>.</p> <a href="logout.php">Sair</a>
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
		


