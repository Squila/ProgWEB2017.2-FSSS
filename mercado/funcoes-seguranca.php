<?php 
session_start();
function deslogar(){
	session_destroy();
	session_start();
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}


function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
	$_SESSION["danger"] = "Você não está logado, por isso não pode fazer nem fazer cadastro ou listagem de produtos !";
	if(!usuarioEstaLogado()){
	header("Location: index.php");
	die();
}
}


function logaUsuario($email){
	$_SESSION["usuario_logado"] = $email;
}