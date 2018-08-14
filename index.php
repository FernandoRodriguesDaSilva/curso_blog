<?php

$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
$INITE = strpos($REQUEST_URI, '?'); /* condição remove tudo depois de ?*/
if ($INITE) {
	$REQUEST_URI = substr($REQUEST_URI, 0, $INITE);
}
/*Remove a barra inicial que e 0 e começa do indice 1*/
$REQUEST_URI_PASTA = substr($REQUEST_URI, 1);
/* Fazer um explode para usar array */
$URL = explode('/', $REQUEST_URI_PASTA);

$URL[0] = ($URL[0] != '' ? $URL[0] : 'home');

if (file_exists($URL[0] . '.php')):
	require $URL[0] . '.php';
elseif (is_dir($URL[0])):
	if (isset($URL[1]) && file_exists($URL[0] . '/' . $URL[1] . '.php')):
		require '' . $URL[0] . '/' . $URL[1] . '.php';
	else:
		require '404.php';
	endif;
else:
	require '404.php';
endif;
?>