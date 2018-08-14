<?php session_start(); ?>
<?php include_once ("../conexao/conexao.php"); ?>
<?php include_once ("../conexao/crud.php"); ?>
<!-- Usuário tem que tá logado para entrar nessa pagina -->
<?php 
// Seu usuário estiver logado pelo id e for igual vazio
if(@$_SESSION["BLOG_FR"]["ID_USUARIO"] == ""){
// retorna para pagina de login
	echo "<script type = 'text/javascript'> location.href='".URL_ADMIN."login.php"." '</script>";	
}
?>
<?php include_once("includes/header.php"); ?>
<!--------------fecha menu esquerdo---------------------->
<!-- Array do site (includes/header)  -->
<?php 
@$link = $_GET["link"];

$pag[1] = "index.php";
$pag[2] = "lst/lst_categoria.php";
$pag[3] = "fm/fm_categoria.php";
$pag[4] = "lst/lst_post.php";
$pag[5] = "fm/fm_post.php";

// verificar se link está vazios
if(!empty($link)){
	// verificar se arquivo $pag existe
	if(file_exists($pag[$link]))
		include $pag[$link];
	else 
		include "index.php";
}
?>
<!-- rodape -->
<?php include_once("includes/footer.php");
