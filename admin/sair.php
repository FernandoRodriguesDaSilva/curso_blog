<?php
require_once("../conexao/conexao.php");
session_start();

unset ($_SESSION["BLOG_FR"]);

echo "<script type = 'text/javascript'> location.href='".URL_ADMIN."login.php' </script>";
 ?>