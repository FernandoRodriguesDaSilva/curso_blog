<?php
// conexão porque está dentro de uma pasta/ dentro de outra pasta
require ('../../conexao/conexao.php');
require ('../../conexao/crud.php');
require ('../../conexao/biblio.php');
// pegando o id e acao da pagina fm_categoria
$id = $_POST["id"];
$acao = $_POST["acao"];
// verificar se vai editar ou excluir
// Maneira alternativa de inserir no banco de dados 
if($acao=="Inserir"){
	if(isset($_POST["txt_categoria_cadastro"])) {
		$categoria = ($_POST["txt_categoria"]);
		$slug_categoria = ($_POST["txt_categoria"]);
		$inserir = "INSERT INTO categorias ";
		$inserir .= "(categoria,slug_categoria) ";
		$inserir .= "VALUES ";
		$inserir .= "('$categoria','$slug_categoria') ";

		$operacao_inserir = mysqli_query(abrirConexao(), $inserir);
		if (!$operacao_inserir) {
			die("erro ao acessar o banco da dados");
		}else {
			//header("location:fm/fm_categoria.php");
			print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=2'>
			<script type = 'text/javascript'> alert('Categoria nova incluida com Sucesso.'); </script>";
		}
	}
}
// editando sem crud
if($acao =="Editar"){
	if(isset($_POST["txt_categoria_cadastro"])){
		$categoria = ($_POST["txt_categoria"]);
		$slug_categoria = ($_POST["txt_categoria"]);
         // Objeto para alterar 
		$alterar = "UPDATE categorias ";
		$alterar .= "SET ";
		$alterar .= "categoria = '{$categoria}', ";
		$alterar .= "slug_categoria = '{$slug_categoria}' ";
		$alterar .= "WHERE id_categoria = {$id} ";
		$operacao_alterar = mysqli_query(abrirConexao(), $alterar);
		if(!$operacao_alterar){
			die("Erro ao alterar o banco de dados");
		}else {
			print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=2'>
			<script type = 'text/javascript'> alert('Categoria Editada com Sucesso.'); </script>";	
		}
	}
}
// excluindo usando crud
if($acao =="Excluir"){
	deletar("categorias", "id_categoria = $id");
	print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php?link=2'>
<script type = 'text/javascript'> alert('Categoria excluida com Sucesso.'); </script>";
}

?>