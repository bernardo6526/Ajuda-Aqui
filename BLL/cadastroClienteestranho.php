<?php

require_once("/../DAL/conexao.php");

$bd = new banco("ajudaAqui");

if ($bd->conexaobd) {

	$login = $_POST['login'];

	$sql = "SELECT login FROM usuario WHERE login = $login";

	if (mysqli_num_rows($sql) === 0) {
		echo "ok";		
	}
}