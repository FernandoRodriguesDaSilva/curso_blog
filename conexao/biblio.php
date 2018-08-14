<?php 

function mostrarPaginacao($url, $ordem, $lpp, $total){
	$paginas = ceil($total/$lpp-1);
	// Páginas que são mostradas realmente
	$paginas_mostradas = ceil($total/$lpp);
	// Especifica um valor para a variável orderm mostrada
	$ordem_mostrada = $ordem + 1;

	if($orderm == 0){
		$mais = $ordem+1;
		$url_mais = "$url&ordem=$mais";
		$paginacao = "<div><p>Página $mais de $paginas_mostradas</p><br>
		<a href=$url_mais>Proxima</a>  | 
		<a href=$url&ordem=$paginas>Ultima</a></div>";
	}

	if($orderm > 0){
		$mais = $orderm+1;
		$url_mais = "$url&ordem=$mais";
		$menos = $ordem - 1;
		$url_menos = "$url&ordem=$menos";
		$paginacao = "<div><p>Página $mais de $paginas_mostradas</p><br>
		<a href=$url&ordem=0>Primeira</a> |
		<a href=$url_menos>Anterior</a> |
		<a href=$url_mais>Próximo</a> |
		<a href=$url&ordem=$paginas>Última</a></div>";

	}
	if($ordem == $paginas){
		$menos = $ordem - 1;
		$url_menos = "$url&ordem=$menos";
		$paginacao="<div><p>Página $mais de $paginas_mostradas</p><br>
		<a href=$url&ordem=0>Primeira</a> |
		<a href=$url_menos>Anterior</a> </div>";
	}
	if($paginas <= 0){
		$paginacao = "<div><p>Página 1 de 1 </p></div>";
	}
	return $paginacao;

	function databr($data, $opcao){
		if($opcao == 1){
			$dia = substr($data,0,2);
			$mes = substr($data,3,2);
			$ano = substr($data,6,4);
		}
		else 
		{
			$dia = substr($data,8,2);
			$mes = substr($data,5,2);
			$ano = substr($data,0,4);

			$databr = $dia . "/" .$mes ."/" .$ano;
		}

		return $databr;


		function SomarData($data, $dias=0, $meses=0, $ano=0){
			$data = explode("/", $data);
			$resData = date("d/m/Y", mktime(0,0,0,$data[1] + $meses , $data[0] + $dias, $data[2] + $ano));
			return $resData;
		}

		function somarDataMYsql($data, $ano,$meses,$dias){
			$data = explode("-", $data);
			$resData2 = date("Y-m-d", mktime(0,0,0,$data[1] + $meses, $data[2] + $dias, $data[0] + $ano));
			return $resData2;
		}

		function diasemanaExtenso($data){
			$ano = substr("$data", 0, 4);
			$mes = substr("$data", 5, -3);
			$dia = substr("$data", 8, 9);

			$diasemana = date("w", mktime(0,0,0,$mes,$dia,$ano));

			switch ($diasemana) {
				case "0":
				$diasemana = "Domingo";
				break;
				case "1":
				$diasemana = "Segunda-feira";
				break;
				case "2":
				$diasemana = "Terça-feira";
				break;
				case "3":
				$diasemana = "Quarta-feira";
				break;
				case "4":
				$diasemana = "Quinta-feira";
				break;
				case "5":
				$diasemana = "Sexta-feira";
				break;
				case "6":
				$diasemana = "Sábado";
				break;
			}
			echo "$diasemana";
		}

		function imprimeMes($valor){
			switch ($valor) {
				case"1":
				$ano = "Janeiro";
				break;
				case"2":
				$ano = "Fevereiro";
				break;
				case"3":
				$ano = "Março";
				break;
				case"4":
				$ano = "Abril";
				break;
				case"5":
				$ano = "Maio";
				break;
				case"6":
				$ano = "Junho";
				break;
				case"7":
				$ano = "Julho";
				break;
				case"8":
				$ano = "Agosto";
				break;
				case"9":
				$ano = "Setembro";
				break;
				case"10":
				$ano = "Outubro";
				break;
				case"11":
				$ano = "Novembro";
				break;
				case"12":
				$ano = "Dezembro";
				break;
			}
			echo "$ano";
		}

		function ultimoDiaMes($data){
			$dia = date("d",$data);
			$mes = date("m",$data);
			$ano = date("Y",$data);

			$data = mktime(0,0,0,$mes,1,$ano);
			return date("d",$data-1);
		}

		function limitarString($string, $lenght = 150){
			if(strlen($string) <= $lenght)
				return $string;
			$corta = substr($string, 0 ,$lenght);
			$espaco = strrpos($corta, '  ');
			return substr($string, 0 , $espaco);
		}

}
 }
?>