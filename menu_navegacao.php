<?php
  if ($_SESSION["login"] == "admin") {
  
?>
     <p><a href="administracao.php"> Administração </a> </p>
	 <p> <a href="Cadastra_funcionarios.php"> Cadastro de Funcionario </a> </p>
	<p> <a href="Cadastra_produtos.php"> Cadastro de Produtos </a> </p>
    <p> <a href="Altera_Exclui_funcionarios.php"> Alteração/Exclusão de Funcionarios</a> </p>
	<p> <a href="Alteracao_Exclui_produtos.php"> Alteração/Exclusão de Produtos</a> </p>
<?php
}
 else{
 ?>
 <p><a href="administracao.php"> Administração</a></p>
 <p> <a href="Cadastra_Produtos.php"> Cadastro de Produtos</a>  </p> 
 <p> <a href="Alteracao_Exclui_produtos.php"> Alteração/Exclusão de Produtos </a> </p>
<?php
}
?>		  
 