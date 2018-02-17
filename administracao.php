<?php
	session_start();
	include "conexao.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> loja de praia </title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
   
    <div id="portal">
        <p class="Portal"> loja</p>
        
        <form method="post">
            <span> Buscar: </span>
            <input type="text" required=""><br>
            <input type="submit" value="buscar">
        </form>
    </div>
    
    <div id="principal">
        <div id="conteudo">
            <h2 class="lista"> Produtos </h2> <br>
			
			<?php
					$consulta = mysql_query ("SELECT COD_PROD, NOME_PROD, TAMANHO_PROD, COR_PROD, PRECO_PROD, SEXO_PROD
																FROM
																	produtos
																			ORDER BY 
																				cod_prod DESC");
				
					$linhas = mysql_num_rows ($consulta);
					
					echo "<h3> $linhas Produtos postados </h3> <br>";
			?>
			
			<?php
			
					for ($cont = 0; $cont < $linhas; $cont++){
						echo '<div class="post">';
						$cod = mysql_result ($consulta, $cont, "COD_PROD");
						$nome = mysql_result ($consulta, $cont, "NOME_PROD");
						$tamanho = mysql_result ($consulta, $cont, "TAMANHO_PROD");
						$cor = mysql_result ($consulta, $cont, "COR_PROD");
						$preco = mysql_result ($consulta, $cont, "PRECO_PROD");
						$sexo= mysql_result ($consulta, $cont, "SEXO_PROD");
						
						$parte_texto = substr ($texto, 0, 49);
					
							echo "<h3 class = 'titulo'> $nome </h2>";
							echo "<h2 class = 'resumo'> $cor </h3> <br>";
							
							echo $parte_texto ?>
									<a href = "exibe_produto.php?codigo=<?php echo "$cod";?>">
										...Ver mais
									</a>					
					<?php
					echo '</div>';
					}
					?>     
        </div>
        
        <div id="login">
		
            <p class="titulo_login"> Seja bem vindo(a) </p>
			<?php
					include "valida_login.php";
					include "menu_navegacao.php";
			?>
			
				<a href = "Log_out.php">
						sair
				</a> 
				
        </div>
    </div>
</body>
</html>