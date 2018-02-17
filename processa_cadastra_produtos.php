<?php

include "conexao.php";

	    $nome = $_POST ["nome"];
		$tamanho = $_POST["tamanho"];
		$cor =$_POST["cor"];
		$preco = $_POST ["preco"];
		$sexo= $_POST["sexo"];
	    
	
	$cadastrar = mysql_query("INSERT INTO produtos
		(NOME_PROD, TAMANHO_PROD, COR_PROD, PRECO_PROD, SEXO_PROD)
					VALUES
		('$nome', '$tamanho','$cor','$preco','$sexo'");
		
		if ($cadastrar == true){
			echo "<script>
				alert ('Produto cadastrada com sucesso')
			</script>";
			
			echo "<script>
					location.href = ('cadastra_produto.php')
				</script>";
				
				exit;
		}
		else {
			
			echo "<script>
				alert ('Ocorreu um erro no servidor, tente novamente mais tarde')
				</script>";
			
			echo "<script>
				location.href = ('cadastra_produto.php')
				</script>"; 			
		}
?>