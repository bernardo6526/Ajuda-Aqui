<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Relatórios do Sistema</h1>
 
</div>  
<div class="container">  
  <form action="" method="get">
			
		
			<div class="row">
				<div class="col-md-6">
					<h3>Selecione um parâmetro</h3> 
					
					<label class="radio-inline">
						<input type="radio" name="tabela">Clínica
					</label>
					<label class="radio-inline">
						<input type="radio" name="tabela">Assistente
					</label>
					<label class="radio-inline">
						<input type="radio" name="tabela">Cliente
					</label>		
		
					
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="form-control input-lg" placeholder="Buscar" />
							<span class="input-group-btn">
								<input class="btn btn-info btn-lg" type="submit" value="Ir">						
							</span>
						</div>
					</div>
				</div>
			</div>		
  </form>
</div>






<?php 

require_once("DAL/conexao.php");


function busca_cep($cep) {  
  $data = @file_get_contents("http://api.postmon.com.br/v1/cep/$cep?format=json");

  $obj = json_decode($data);
  return $obj;
}

$tratamento = array(".","-","/",")","("," ");

foreach ($_POST as $key => $value) {
	$key = $value;
}








$bd = new banco("ajudaaqui");


if ($bd->conexaobd) {

	$sql = "SELECT assistente.nome,assistente.nota,clinica.nome FROM assistente JOIN clinica WHERE clinica_id = clinica.id";
	

	if (mysqli_query($bd->conexaobd, $sql)) 
	{
		

		if (mysqli_query($bd->conexaobd, $sql)) {
			echo "ok";
		}

	}
}

?>

</body>
</html>

