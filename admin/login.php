<?php include_once "../conexao/conexao.php";?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ferex-php</title>

	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/abas.js"></script>
</head>
<body style="background:#064A5F;">
	<div class="base-login">
		<div class="conteudo">
			<div class="cx-login">
				<img src="imagens/img-login.png">
				<form action="logar.php" method="post">
					<label>
						<strong>Usuário</strong>
						<input type="text" name="txt_login" id="" value="">
					</label>
					<label>
						<strong>Senha</strong>
						<input type="password" name="txt_senha" id="" value="">
					</label>
					<label>
						<input type="submit" value="entrar" class="but">
					</label>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
