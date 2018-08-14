<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ferex-php</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/estilo2.css">
<link rel="stylesheet" href="css/estilo-m.css">
 <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="js/abas.js"></script>
</head>
<body>
<!-- topo -->
	<div class="mn-topo">
		<div class="conteudo"><a href="sair.php" class="but-sair"><span>sair</span></a></div>
	</div>
	<div class="base-topo">
			<div class="conteudo">
			<section>
				<a href="index.php"><img src="imagens/sua-logo.png"></a>
			<div class="bemvindo">
			<h2>BEM VINDO(A),</h2>
			<!-- Chamando que está logado pelo Login(login->banco) -->
			<h1><?php echo $_SESSION["BLOG_FR"]["LOGIN"] ?></h1>
			</div>
			</section>
			</div>
	</div>
	<div class="limpar"></div>
<!-- meio -->
<div class="conteudo">
		<!--------------menu esquerdo---------------------->	
	<div class="base-esq">	
	<h1>PAINEL DE CONTROLE</h1>	
		<div class="lado-esq">
				<ul>
					<!-- Paginação por array (página index) -->
					<li><a href="index.php?link=1">Home</a></li>
					<li><a href="index.php?link=2">Categorias</a> </li>		
					<li><a href="index.php?link=4">Posts</a> </li>
					<li><a href="index.php?link=6">Vídeos</a> </li>
					<li><a href="lista_comentarios.php">Comentários</a> </li>
					<li><a href="lista_usuario.php">Usuário</a> </li>	
				</ul>
		</div>
	</div>