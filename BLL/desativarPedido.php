<?php

require_once("/../DAL/conexao.php");
$bd = new banco('ajudaaqui');

$idPedido = $_GET['idPedido'];
$idAssistente = $_GET['idAssistente'];

$sql = "UPDATE assistente SET status = 0 WHERE id = $idAssistente";
mysqli_query($bd->conexaobd, $sql);
$sql = "UPDATE pedido SET status = 2 WHERE id = $idPedido";
echo $sql;
mysqli_query($bd->conexaobd, $sql);

echo "ok";