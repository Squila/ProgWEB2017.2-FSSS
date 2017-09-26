<?php
include("banco-produto.php");
 include("conecta.php");
$id = $_GET["id"];
removeProduto($conexao, $id);
?>
<p class="text-success">Produto removido com sucesso!</p>
<?php 

?>