<?php
include("conecta.php");
include("banco-usuario.php");
include("funcoes-seguranca.php");
$email = $_POST["email"];
$senha = $_POST["senha"];

echo $email;
echo $senha;
$usuario = buscaUsuario($conexao, $email, $senha);

if($usuario == null){
	header("Location: index.php?login=0");
}else{
	logaUsuario($email);
	header("Location: index.php?login=1");
}
die();



?>