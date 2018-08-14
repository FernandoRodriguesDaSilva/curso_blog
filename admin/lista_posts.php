<?php include_once("includes/header.php"); ?>
	<!--------------fecha menu esquerdo---------------------->
		
<div class="base-direita">
	<h1>Lista de posts</h1>
	<div class="base-lista">
		<div class="cx-lista">
		<h2>Lista de posts</h2>
		<a href="cadastro_posts.html">Cadastrar posts </a>
		<p class="limpar">&nbsp;</p>
						
	<table width="100%" border="0" cellpadding="2" cellspacing="2">
		<tbody>
			<tr>
			  <td width="6%" align="center" class="tdbc">id</td>
			  <td width="60%" align="center" class="tdbc">Título do post</td>
			  <td width="8%" align="center" class="tdbc">Ativo</td>
			   <td align="center" colspan="2" class="tdbc">Ação</td>
			</tr>
	
		  <tr> 						
				
			<td class="coluna1" align="center">01</td>			
			<td class="coluna1">Titulo do post aqui</td>	
			<td align="center" class="coluna1">S</td>
			<td width="14%" align="center" class="coluna1"><a href="cadastro_posts.html">Editar</a></td>
			<td width="12%" align="center" class="coluna1"><a href="cadastro_posts.html" class="excluir">Excluir</a></td>	
			
	
			</tr>  <tr> 						
				
			<td class="coluna2" align="center">02</td>			
			<td class="coluna2">Titulo do post aqui</td>	
			<td align="center" class="coluna2">S</td>
			<td class="coluna2" align="center"><a href="cadastro_posts.html">Editar</a></td>
			<td class="coluna2" align="center"><a href="cadastro_posts.html" class="excluir">Excluir</a></td>	
			
	
			</tr>  <tr> 						
				
			<td class="coluna1" align="center">03</td>			
			<td class="coluna1">Titulo do post aqui</td>	
			<td align="center" class="coluna1">S</td>
			<td class="coluna1" align="center"><a href="cadastro_posts.html">Editar</a></td>
			<td class="coluna1" align="center"><a href="cadastro_posts.html" class="excluir">Excluir</a></td>	
				
			</tr> 
            	
            </tbody>
            </table>
		
		<div class="cx-paginacao">
			<p></p><div><p>Página 1 de 3</p><br>
			<a href="index.php?link=4&amp;ordem=1&amp;termodabusca=&amp;campo=">Próxima</a> | 
			<a href="index.php?link=4&amp;ordem=23">Última</a></div><p></p>
		</div>

		<p>&nbsp;</p>
		<p>&nbsp;</p>


	</div>
	</div>
</div>

</div>

<!-- rodape -->
<?php include_once("includes/footer.php");?>