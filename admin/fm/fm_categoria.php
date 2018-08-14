<!-- Variaveis do botão Editar e excluir -->
<?php 
@$acao = $_GET["acao"];
@$id = $_GET["id"];
// verificar se a ação existe
if($acao){
	//utilizando a tabela do crud consultar("nome_da_tabela","id_coluna" = (armazena na variavel $id))
	$categoria = consultar("categorias", "id_categoria = $id ");
	// imprimir o valor dentro da variavel $txt_categoria
	$txt_categoria = $categoria[0]["categoria"];
	$txt_categoria = $categoria[0]["slug_categoria"];
}
?>

<!-- Acessa Banco de dados e crud -->
<?php include_once("includes/header.php"); ?>

<div class="base-direita">	
	<h1>CADASTRO DE CATEGORIAS</h1>
	<div class="cx-form">
		<div class="cx-pd">		
			<!-- Chama a pagina que está a operação categoria -->
			<form action="op/op_categoria.php" method="post">	
				<label>
					<strong>Insira uma categoria</strong>
					<!-- Acionando o banco no txt_categoria -->
					<!-- imprimindo o valor do banco usando o value -->
					<input type="text" name="txt_categoria" 
					value="<?php echo @$txt_categoria; ?>" size="110">
				</label>
				<label>
					<div class="cx-but">
						<!-- variavel $id para pagina op_categoria -->
						<input type="hidden" name="id" value="<?php echo @$id ?>">
						<input type="hidden" name="irpara" value="">							
						 <input type="hidden" name="acao" value="<?php echo (@$acao !="")? @$acao: "Inserir" ?>">			<!-- Se acao for diferente de vazio imprime Inserir -->
						<input type="submit" name="txt_categoria_cadastro" id="logar" value="<?php echo (@$acao != "")? @$acao: "Inserir" ?>" class="but">	
					</div>
				</label>
			</form>

		</div>
	</div>
</div>
</div>

<?php include_once ("includes/footer.php"); ?>