<?php SESSION_START(); 

 require '../conexao/conexao.php';
 require '../conexao/crud.php';

$txt_login = $_POST["txt_login"];
$txt_senha = $_POST["txt_senha"];
// As tabelas estão no plural
// entra no crud na função consultar e consulta no banco a tabela usuarios
// os campos login e senha 
if(($txt_login!="") && ($txt_senha !="")){
	$cliente = consultar("usuarios"," login = '$txt_login' and senha = '$txt_senha'");
	// Se a variavel cliente existir ... 
	if($cliente){    
		$_SESSION["BLOG_FR"]["LOGIN"] = $cliente[0]["login"];
		$_SESSION["BLOG_FR"]["SENHA"] = $cliente[0]["senha"];
		$_SESSION["BLOG_FR"]["EMAIL"] = $cliente[0]["email"];
		$_SESSION["BLOG_FR"]["ID_USUARIO"] = $cliente[0]["id_usuario"];
	// Se usuario e senha existir encaminhe para url abaixo
		$url = URL_ADMIN;
		echo "<script type = 'text/javascript'> location.href='$url'</script>";
	// Se não faça ... 
	}else {
		$url = URL_ADMIN ."/login.php";
		unset($_SESSION["BLOG_FR"]);
		print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		<script type = 'text/javascript'> alert('usuario ou senha invalido') </script>";
	}
} else { 
	$url = URL_ADMIN ."/login.php";
	unset($_SESSION["BLOG_FR"]);
	print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
	<script type = 'text/javascript'> alert('Operaçao realizada com sucesso') </script>";
}

// Umas das páginas principais do php pra se entender mais a fundo a linguagem
// usou a tabela no banco de dados a fundo (usuarios)

?>