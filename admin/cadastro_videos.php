
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton-php</title>

<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/estilo.css" rel="stylesheet" type="text/css">

<!--[if lte IE 8]>
<script type="text/javascript">
var htmlshim='abbr,article,aside,audio,canvas,details,figcaption,figure,footer,header,mark,meter,nav,output,progress,section,summary,time,video'.split(',');
var htmlshimtotal=htmlshim.length;
for(var i=0;i<htmlshimtotal;i++) document.createElement(htmlshim[i]);
</script>
<![endif]-->
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="js/abas.js"></script>
</head>


<body>
<!-- topo -->
	<div class="mn-topo">
		<div class="conteudo"><a href="logoff.php" class="but-sair"><span>sair</span></a></div>
	</div>
	<div class="base-topo">
			<div class="conteudo">
			<section>
				<a href="index.php?link=1"><img src="imagens/sua-logo.png"></a>
			<div class="bemvindo">
			<h2>BEM VINDO(A),</h2>
			<h1>Manoel Jailton</h1>
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
					<li><a href="index.html">Home</a></li>
					<li><a href="lista_categoria.html">Categorias</a> </li>				
					<li><a href="lista_posts.html">Posts</a> </li>
					<li><a href="lista_videos.html">Vídeos</a> </li>
					<li><a href="lista_comentarios.html">Comentários</a> </li>
					<li><a href="lista_usuario.html">Usuário</a> </li>
				</ul>
			
		</div>
	</div>

	<div class="base-direita">	
		
<h1>CADASTRO DE vídeo</h1>
		<div class="cx-form">
	<div class="cx-pd">
	<form action="" method="post">
<label class="esq">		
<strong>Escolha uma categoria</strong>
    <select name="id_modulo">
          &nbsp;
         <option value="1"> PHP</option><option value="2"> JAVA</option><option value="3"> CSS</option><option value="4"> JAVA</option><option value="5"> HTML</option> 
          &nbsp;
        </select>
</label>
   
<label class="dir">
<strong>Ativo</strong>
	<select name="txt_ativo">
	<option value="S">Sim</option>
	<option value="N">Não</option>
  </select>
</label>

  <label><strong>Título do Vídeo</strong>
   <input type="text" name="txt_curso" id="txt_curso" value="" size="110">
  </label>

  <label><strong>Insira o conteudo do vídeo</strong>
   <textarea rows="8"></textarea>
  </label>

  <label><strong>Imagem do vídeo</strong>
   <input type="file">
  </label>


	
		<label>
		<div class="cx-but">
			<input type="hidden" name="id" value="">
			<input type="hidden" name="irpara" value="">							
			<input type="hidden" name="acao" value="Inserir">										
			<input type="submit" name="logar" id="logar" value="Inserir" class="but">	
		</div>	
		</label>
</form>

		</div>
		</div>
	</div>
</div>

<!-- rodape -->

<div class="limpar"></div>
	<div class="base-rodape">
		<div class="cx-menu-rodape">
			<p>Sua empresa aqui - Copyright 2015
			<br/>CNPJ:11.000.111/0000-00</p>
		</div>
	</div>
</body>
</html>
	
	