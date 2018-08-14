<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton ligando você ao mundo do conhecimento</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="css/estilo-m.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">		

<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
			function abreFecha(sel) {
			$(sel).slideToggle();
			}
	</script>
</head>
<body>
<div class="base-topo">
		<div class="topo">
			<div class="caixa-topo">
				<div class="conteudo">
					<a href="index.php?link=1" class="logo"><img src="img/logo.png"></a>
					<form action="index.php?link=7" method="POST" name="">
						<input type="text" value="" name="" placeholder="PESQUISA">
						<input type="submit" value="" name="" class="but">
					</form>
					<ul>
						<li><a href="index.php?link=4">VÍDEOS</a></li>
						<li><a href="index.php?link=6">LOGIN</a></li>
						<li><a href="index.php?link=5">CADASTRAR</a></li>
						<li><a href="index.php?link=5" class="usuario">TALRAS GOES</a></li>
					</ul>
				</div>
			</div>
			<div class="topo-menu">
			<div id="menu">
				<a href="javascript:abreFecha('#mostrarmenu')" class="mobmenu">MENU</a>
				<div class="conteudo" id="mostrarmenu">				
					<ul>
						<li><a href="index.php?link=1">home</a> </li>    
						<li><a href="index.php?link=3">php</a> </li>    
						<li><a href="index.php?link=3">java</a> </li>    
						<li><a href="index.php?link=3">html</a> </li>    
						<li><a href="index.php?link=3">css</a> </li>    
						<li><a href="index.php?link=3">javascript</a> </li>    
						<li><a href="index.php?link=3">delphi</a> </li>    
						<li><a href="index.php?link=3">vb.net</a> </li>
						<!-- aqui mostra só no mobile -->
						<div class="mostra">
							<li><a href="index.php?link=4">VÍDEOS</a></li>
							<li><a href="index.php?link=6">LOGIN</a></li>
							<li><a href="index.php?link=5">CADASTRAR</a></li>
							<li><a href="">Sair</a></li>	
						</div>	
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="limpar"></div>
	
	