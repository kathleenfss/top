<?php

	session_start();
	include "conexao.php";

	$login = $_POST ["login"];
	$senha = $_POST ["senha"];
	
	$pesquisa = mysql_query("select
									login_fun, senha_fun
										from funcionario
											where 
												BINARY
													login_fun = '$login' and senha_fun = '$senha'");
												
	$linhas = mysql_num_rows ($pesquisa);
	
	if($linhas == true){
		$_SESSION ["login"] = $login;
		echo "<script> location.href = ('administracao.php') </script>";
	}
	else {
		echo "<script> alert ('Login ou senha Inválidos Digite novamente') </script>";
		echo "<script> location.href = ('index.php') </script>";	
	}
	
?>