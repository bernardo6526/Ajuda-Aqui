<?php

require_once("/../DAL/conexao.php");
$bd = new banco('ajudaaqui');

$idPedido = $_GET['idPedido'];
$idAssistente = $_GET['idAssistente'];

$sql = "UPDATE assistente SET status = true WHERE id = $idAssistente";
mysqli_query($bd->conexaobd, $sql);
$sql = "UPDATE pedido SET status = false WHERE id = $idPedido";
mysqli_query($bd->conexaobd, $sql);

echo "ok";