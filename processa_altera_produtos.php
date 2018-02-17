<?php
	include "conexao.php";
	session_start();
		$nome = $_POST ["nome"];
		$tamanho = $_POST["tamanho"];
		$cor =$_POST["cor"];
		$preco = $_POST ["preco"];
	    $codigo = $_POST ["codigo"];
			
			$altera = mysql_query ("UPDATE produtos
										SET
											NOME_PROD = '$nome',
											TAMANHO_PROD = '$tamanho',
											COR_PROD = '$cor',
											PRECO_PROD ='$preco',
											
										WHERE
											COD_PROD = '$codigo'");
											
		if ($altera == true){
		
			echo "<script> 
					alert ('$PRECO Alterado com sucesso')
				</script>";
				
			echo "<script> 
					location.href = ('altera_exclui_produto.php')
				</script>";
				
			exit();
		}
		else {
			
			echo "<script> 
					alert ('Ocorreu um erro no servidor tente novamente')
				</script>";
				
			echo "<script> 
					location.href = ('altera_exclui_noticia.php')
				</script>";
		}
			
?>