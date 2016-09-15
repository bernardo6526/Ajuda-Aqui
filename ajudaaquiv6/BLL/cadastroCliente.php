<?php

require_once("/../DAL/conexao.php");


function busca_cep($cep) {  
  $data = @file_get_contents("http://api.postmon.com.br/v1/cep/$cep?format=json");

  $obj = json_decode($data);
  return $obj;
}

$tratamento = array(".","-","/",")","(");

foreach ($_POST as $key => $value) {
	$key = $value;
}

ECHO $_POST['nascimento'];

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome']
$email $_POST['email'];
$nascimento = str_replace($tratamento, "", $_POST['nascimento']);
$cpf = str_replace($tratamento, "", $_POST['cpf']);
$rg = str_replace($tratamento, "", $_POST['rg']);
$telefone = str_replace($tratamento, "", $_POST['telefone']);
$cep = str_replace($tratamento, "", $_POST['cep']);
$numero = $_POST['numero'];
$complemento =  $_POST['complemento'];
$tipo = $_POST['tipo'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$endereco = busca_cep($cep);
$bd = new banco("ajudaaqui");

try{
	if ($bd->conexaobd) {

		$sql = "INSERT INTO cliente VALUES(NULL, '$nome', '$cpf', '$email', '$nascimento',";
		$sql .= " '$rg', '$telefone','$tipo','$endereco->cidade', '$endereco->bairro', '$endereco->logradouro',";
		$sql .= " '$complemento', '$numero', '$endereco->estado',$cep)";

		var_dump($sql);
		
		
		if (mysqli_query($bd->conexaobd, $sql)) 
		{
			$fk = mysqli_insert_id($bd->conexaobd);  //Pegando id do insert pra salvar na tabela usuário
			$sql = "INSERT INTO usuario VALUES (NULL,'$login','$senha',3,$fk)";
			mysqli_query($bd->conexaobd, $sql);
			var_dump($sql);
			
			
			
			
		}
		else {ECHO "ERRO NA QUERY SQL";ECHO $bd->status;}
	}
}
catch (Exception $e) {

}