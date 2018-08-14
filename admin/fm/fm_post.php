<?php 
@$acao = $_GET["acao"];
@$id = $_GET["id"];
// consultando banco usando crud
if($acao){
	$post = consultar("posts", "id_post = $id");
// consultando os dados no banco
	$txt_post = $post[0]["post"];
	$txt_slug = $post[0]["slug_post"];
	$txt_imagem = $post[0]["imagem"];
	$txt_descricao = $post[0]["descricao"];
	$txt_views = $post[0]["views"];
	$txt_data = $post[0]["data"];
	$txt_embed = $post[0]["embed_youtube"];
	$txt_ativo = $post[0]["ativo"];
// pegando dados de outra coluna
	$txt_id_categoria = $post[0]["id_categoria"];
}
?>


<?php include_once("includes/header.php"); ?>

<div class="base-direita">
	<h1>CADASTRO DE POSTS</h1>
	<div class="cx-form">
		<div class="cx-pd">
			<form action="op/op_post.php" method="post">
				<label class="esq">		
					<strong>Escolha uma categoria</strong>
					<!-- listar as categorias que estão no banco de dados -->
					<select name="txt_id_categoria">
						&nbsp;
						<?php // tabela de categorias
						$categorias = consultar("categorias");
						foreach($categorias as $categoria){
								// Se variavel $cod_categoria for igual a id categoria 
							@$cod_categoria = $categoria["id_categoria"];
							@$selecionado = ($cod_categoria == $id_categoria)? "selected":"";
							echo "<option value=$cod_categoria $selecionado> $categoria[categoria]</option> ";
						}
						?>
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

				<label><strong>Título do post</strong>
					<input type="text" name="txt_post" 
					value="<?php echo @$txt_post ?>" size="110">
				</label>

				<!-- Imagem do Post -->
				<label class="esq">
					<strong>Imagem</strong>
					<input type="text" name="txt_imagem" 
					value="<?php echo @$txt_imagem ?>">
				</label>
				<label class="dir">
					<strong>Imagem</strong>
					<input type="file" name="arquivo" value="">
				</label>

				<label class="esq">
					<strong>Embed</strong>
					<input type="text" name="txt_embed" 
					value="<?php echo @$txt_embed?>">
				</label>
				<label class="dir">
					<strong>Data</strong>
					<input type="text" name="txt_data"  
					value="<?php echo @$txt_data ?>">
				</label>
				<!-- Fim Imagem do Post -->

				<label><strong>Insira o conteudo</strong>
					<textarea rows="10" name="txt_descricao">
						<?php echo @$txt_descricao ?>
					</textarea>
				</label>

				<label class="esq">
					<strong>slug</strong>
					<input type="text" name="txt_slug" 
					value="<?php echo @$txt_slug ?>">
				</label>

				<label class="dir">
					<strong>Views</strong>
					<input type="text" name="txt_views" 
					value="<?php echo @$txt_views ?>">
				</label>

				<label>
					<div class="cx-but">
						<!-- Pega o valor do Id que está no topo da pagina -->
						<input type="hidden" name="id" value="<?php echo @$id ?>">
						<input type="hidden" name="irpara" value="">							
						<input type="hidden" name="acao" value="<?php echo (@$acao !="")? @$acao: "Inserir" ?>">			<!-- Se acao for diferente de vazio imprime Inserir -->
						<input type="submit" name="txt_post_cadastro" id="logar" value="<?php echo (@$acao != "")? @$acao: "Inserir" ?>" class="but">	
					</div>	
				</label>
			</form>
		</div>
	</div>
</div>
</div>
<!-- rodape -->

<?php include_once("includes/footer.php"); ?>
