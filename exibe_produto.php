<?php
	session_start();
	include "conexao.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> loja </title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
   
    <div id="portal">
        <p class="Portal"> loja </p>
        
        <form method="post">
            <span> Buscar: </span>
            <input type="text" required=""><br>
            <input type="submit" value="buscar">
        </form>
    </div>
    
    <div id="principal">
        <div id="conteudo">
            <h2 class="lista">  Produtos </h2> <br>
			<table>
			<?php
				$cod = $_GET["codigo"];
				
				$pesquisa = mysql_query ("SELECT  NOME_PROD, TAMANHO_PROD, COR_PROD, PRECO_PROD, SEXO_PROD
															FROM 
																produtos
															WHERE
																COD_PROD = '$cod'");
						$nome = mysql_result ($pesquisa, 0, "NOME_PROD");
						$tamanho = mysql_result ($pesquisa, 0, "TAMANHO_PROD");
						$cor = mysql_result ($pesquisa, 0, "COR_PROD");
						$preco = mysql_result ($pesquisa, 0, "PRECO_PROD");
						$sexo= mysql_result ($pesquisa, 0, "SEXO_PROD");
				
					
							echo "<h3> $nome </h3>";
							echo "<p> $tamanho </p> <br>";
							echo "<p> $cor </p> <br>";
							echo "<p> $preco </p> <br>";
							echo "<p> $sexo </p>";
							
			?>	
			</table>
        </div>
        
        <div id="login">
		
            <p class="titulo_login"> Seja bem vindo(a) bebezão </p>
			<?php
					include "valida_login.php";
					include "menu_navegacao.php";
			?>
			
				<a href = "Log_out.php">
						sair
				</a> 
				
        </div>
    </div>