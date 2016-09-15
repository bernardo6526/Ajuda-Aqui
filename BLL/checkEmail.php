<?php

require_once("/../DAL/conexao.php");

$bd = new banco("ajudaaqui");
$email = $_GET['email'];

$sql = "SELECT email FROM cliente WHERE email = '$email'";
$conn = mysqli_query($bd->conexaobd, $sql);

if (mysqli_num_rows($conn) != 0) {
	echo json_encode(false);
}
else {
	echo json_encode(true);
}
