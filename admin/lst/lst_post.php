<?php include_once("includes/header.php"); ?>
<!-- Variavel do buscador -->
<?php
$pesq = isset($_GET["pesq"])? $_GET["pesq"]:"";
$campo = isset($_GET["campo"])? $_GET["campo"]:"";
?>
<!--------------fecha menu esquerdo---------------------->
<!-- Formulário de buscar no banco -->
<form action="index.php" method="get" name="buscausuario" id="buscausuario">
	<table border="0">
		<tbody>
			<tr>
				<th width="16%"><strong>Buscar</strong></th>
				<!-- variavel pesq no topo -->
				<th width="50%"><input type="text" name="pesq" value="<?php echo $pesq ?>"/></th>
				<th>
					<!-- variavel campo no topo -->
					<select name="campo" >
						<option value="categoria">post</option>
					</select>
				</th>
				<input type="hidden" name="link" value="2"/>
				<th>
					<input type="submit" name="submit" value="" class="but">
				</th>
			</tr>
		</tbody>
	</table>
</form>

<div class="base-direita">
	<h1>Lista de Posts</h1>
	<div class="base-lista">
		<div class="cx-lista">		
			<h2>Lista de posts</h2>
			<!-- Url definida em index.php -->
			<a href="index.php?link=5">Cadastrar posts </a>
			<p class="limpar">&nbsp;</p>
			<!-- Usando crud.php para fazer consultar -->
			<?php 

				// Selecionando a tabela posts do banco de dados
			if($pesq == ""){ // Se pesquisa for diferente de vazio mostra todas as posts
				$sql = "SELECT * FROM posts ";
			} else { // Se não 
				$sql = "SELECT * FROM posts WHERE $campo LIKE '%$pesq%' ";
			}
			
			// Usando a tabela Total() da pagina crud
			$total = total($sql);
				// Se variavel total for maior que 0 (mostra o total)
			if($total <= 0){
				echo "Nenhum registro foi encontrado.";
				// Pega toda essa parte da <table>
				}else{ // se não exibe (nenhum registro foi encontrado)
					echo "<h5>Existem "."<span style='color:red;'>". $total."</span>"." registros cadastrados.</h5>";
					?>
					<table width="100%" border="0" cellpadding="2" cellspacing="2">
						<tbody>
							<tr>
								<td width="6%"  align="center" class="tdbc">id</td>
								<td width="67%"  align="left" class="tdbc">Post</td>
								<td  align="center" colspan="2"  class="tdbc">Ação</td>
							</tr>
							<!-- Aparecendo coluna de forma dinâmica -->
							<?php
						// Utilizar a funcão selecionar() do crud
							$posts = selecionar($sql);

							$i=0;
						// fazer o zebrado usando variavel i
							foreach ($posts as $post) {
							// logica para mudar as cores da coluna
								$col = ($i%2==0) ? "coluna1" : "coluna2";
  
								?>
								<!-- Class com logica  -->
								<tr  class="<?php echo $col ?>">
									<td  align="center"><?php echo $post["id_post"]; ?></td>
									<td  align="left"><?php echo $post["post"]; ?></td>
									<td width="14%" align="center">
										<!-- botão configurado para editar categorias -->
										<a href="index.php?link=5&acao=Editar&id=<?php echo $post["id_post"] ?>">Editar</a>
									</td>
									<!-- botão configurado para excluir categorias -->
									<td width="13%" align="center">
										<a href="index.php?link=5&acao=Excluir&id=<?php echo $post["id_post"] ?>">Excluir</a>
									</td>		 
								</tr>
								<!-- Somando par e impar nas colunas -->
								<?php
								$i++;
							}
							?>
							<!-- Fechando o foreach na -->
						</tbody>
					</table>
				<?php  } ?>  
				<!-- Quando utiliza php dentro de uma html -->
		</div>
	</div>
</div>
<!-- rodape -->
<?php include_once("includes/footer.php");?>

<!-- Usou a tabela posts do banco de dados -->
<!-- Usou formulário de buscar no banco de dados -->