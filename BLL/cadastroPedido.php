<?php
session_start();

require_once("/../DAL/conexao.php");
$bd = new banco('ajudaaqui');

$id = $_SESSION['user']->id;
$local = $_POST['local'];
$assistente = $_POST['assistente'];

$sql = "INSERT INTO pedido VALUES(null, '$local', now(), 1, $id, $assistente)";
mysqli_query($bd->conexaobd, $sql);
echo "foda-se";


