<!DOCTYPE html>
<?php

	include "conexao.php";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cara de Concha</title>
    <link rel="stylesheet" href="layout.css">
	<link rel= "shortcut icon" href="https://www.iconfinder.com/data/icons/animals-wildlife/128/shellfish-512.png"type="">
	<script language = "javascript" type = "text/javascript">
	function validar() {
	
		var login = form_login.login.value;
		var senha = form_login.senha.value;
		
		if (login == ""){
			alert ("Preencha o campo com seu login");
			form_login.login.focus();
			
			return false;
		}
		
		if (senha == ""){
			alert ("Preencha o campo com sua senha");
			form_login.senha.focus();
			
			return false;
		}
	}
	</script>
</head>
<body background=".png">
   <div id="principal">
			<div id="banner">
				<img src="im">
			</div>
			<div id="conteudo_especifico_home_page">
         <div id="login">
            <p class="titulo_login">Área do Funcionario</p>
            
            <form action = "processa_login.php" method="post" name = "form_login" class="area_restrita">
                
				<span>Login:</span>
                <input type="text" required="" name = "login">
                
				<span>Senha:</span>
                <input type="password" required="" name = "senha">
                
				<input type="submit" value="Entrar" onclick = "return validar()">
            </form>
        </div>
		</div>
		<div id="rodape">
			Telefone: 5268-9416<img src="imagens\cel.png"> / Email: infiniteplay_help@hotmail.com <img src="imagens\email.png">       IPLAY THE BEST  <img src="imagens\logotipod.png">
			</div>
		</div>
</body>
</html>