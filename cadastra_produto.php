<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>loja</title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
   
    <div id="portal">
        <p class="Portal">loja</p>
        
        
    </div>
    
    <div id="principal">
        <div id="conteudo">
            <p><h2> Formulário De Cadastro De Produtos </h2></p>
			
			<div id="">
			<form method="post" action= "processa_cadastra_produto.php">
            Nome: <input type= "text" required= "" name= "nome"><br>
            Tamanho: <input type= "text" required="" name= "tamanho"><br>
			Cor:<input type= "text" required="" name= "cor"><br>
			Preço: <input type= "text" required="" name= "preco"><br>
			Sexo M <input type="radio"> F <input type="radio" required="" name= "sexo"><br>
			
			<input type="submit" value="Cadastrar Produto">
			</div>
			
        </form>
			
            
        </div>
        
        <div id="login">
            <p class="titulo_login"> Seja bem vindo </p>
			<?php
					include "Valida_Login.php";
					include "menu_navegacao.php";
			?>
				<a href = "Log_out.php">
						sair
				</a>
        </div>
    </div>