<?php
include("banco-produto.php");
 include("conecta.php");
 include("cabecalho.php");
$id = $_POST["id"];
removeProduto($conexao, $id);
?>
<p class="text-success">Produto removido com sucesso!</p>
<?php
header("Location: produto-lista.php");
die();
?>
<?php 
include("rodape.php");
?>