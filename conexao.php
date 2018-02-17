<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
	mysql_connect ("localhost","root","") or
	die("Não foi possivel conectar no servidor do Banco de dados");
	
	mysql_select_db ("loja") or
	die ("Não foi possivel encontrar o BD");
?>