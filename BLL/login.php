<?php

require_once("/../DAL/conexao.php");

$bd = new banco("ajudaAqui");

if ($bd->conexaobd) {

	if (!empty($_POST)) {

		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$sql = mysqli_query($bd->conexaobd, "SELECT id,login, tipo, fk FROM usuario WHERE login = '$login' AND senha = '$senha'");

		if (mysqli_num_rows($sql) == 1) {

			$obj = mysqli_fetch_object($sql);
			session_start();

			
			$_SESSION['user'] = $obj;
			
			
 			echo json_encode($obj);
			

		} 
		else {
			echo "Erro";
		}
	} 
} 
