<?php
// conexão porque está dentro de uma pasta/ dentro de outra pasta
require ('../../conexao/conexao.php');
require ('../../conexao/crud.php');
require ('../../conexao/biblio.php');
// pegando o id e acao da pagina fm_post.php
$id = $_POST["id"];
$acao = $_POST["acao"];
// verificar se vai editar ou excluir
// Maneira alternativa de inserir no banco de dados 
	if($acao=="Inserir"){
		if(isset($_POST["imagem"])) {
			$categoria = ($_POST["id_categoria"]);
			$txt_post = ($_POST["post"]);
			$txt_slug = ($_POST["slug_post"]);
			$txt_imagem = ($_POST["imagem"]);
			$txt_descricao = ($_POST["descricao"]);
			$txt_views = ($_POST["views"]);
			$txt_data = ($_POST["data"]);
			$txt_embed = ($_POST["embed_youtube"]);
			$txt_ativo = ($_POST["ativo"]);
 
			$inserir = "INSERT INTO posts ";
			$inserir .= "(id_categoria,slug_post,post,imagem,descricao,views,data,embed_youtube,ativo) ";
			$inserir .= "VALUES ";
			$inserir .= "('$categoria','$txt_post','$txt_slug','$txt_imagem','$txt_descricao','$txt_views','$txt_data','$txt_embed','$txt_ativo') ";

			$operacao_inserir = mysqli_query(abrirConexao(), $inserir);
			if (!$operacao_inserir) {
				die("erro ao acessar o banco da dados");
			}
		}
	}


// editando sem crud
if($acao =="Editar"){
	if(isset($_POST["post"])){
			$txt_post = ($_POST["post"]);
			$txt_slug = ($_POST["slug_post"]);
			$txt_imagem = ($_POST["imagem"]);
			$txt_descricao = ($_POST["descricao"]);
			$txt_views = ($_POST["views"]);
			$txt_data = ($_POST["data"]);
			$txt_embed = ($_POST["embed_youtube"]);
			$txt_ativo = ($_POST["ativo"]);
 
         // Objeto para alterar 
		$alterar = "UPDATE posts ";
		$alterar .= "SET ";
		$alterar .= "post = '{$txt_post}', ";
		$alterar .= "imagem = '{$txt_imagem}', ";
		$alterar .= "descricao = '{$txt_descricao}', ";
		$alterar .= "views = '{$txt_views}', ";
		$alterar .= "data = '{$txt_data}', ";
		$alterar .= "embed_youtube = '{$txt_embed_youtube}', ";
		$alterar .= "slug_post = '{$txt_slug_post}' ";
		$alterar .= "WHERE id_post = {$id} ";
		$operacao_alterar = mysqli_query(abrirConexao(), $alterar);
		if(!$operacao_alterar){
			die("Erro ao alterar o banco de dados");
		}else {
			print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=5'>
			<script type = 'text/javascript'> alert('Categoria Editada com Sucesso.'); </script>";	
		}
	}
}
// excluindo usando crud
if($acao =="Excluir"){
	deletar("posts", "id_post = $id");
	print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=5'>
<script type = 'text/javascript'> alert('Categoria excluida com Sucesso.'); </script>";
}

?>
