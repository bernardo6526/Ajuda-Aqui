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
<body style="background-color:rbga(0,0,0,0)">

<div class="jumbotron text-center">
  <h1>Relatórios do Sistema</h1>
 
</div>  
<div class="container">  
  <form action="" method="post">
			
		
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
							<input type="text" class="form-control input-lg" placeholder="Buscar" name="pesq" />
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

require_once("../DAL/conexao.php");
$bd = new banco("ajudaaqui");







if ($bd->conexaobd) 
{

	if (isset ($_POST['tabela']))
	{
		$tabela = $_POST['tabela'];
		if(isset($_POST['pesq']))
		{
			$pesq = $_POST['pesq'];
		}
		else 
		{
			$pesq = "";
		}
		
		switch ($tabela) 
		{
			case "Clínica":
				if ($pesq == "")
				{
					$sql = "SELECT clinica.nome,clinica.nota,clinica.uf,clinica.cidade FROM clinica";
				}
				else {
						$sql = "SELECT clinica.nome,clinica.nota,clinica.uf,clinica.cidade FROM clinica WHERE clinica.nome LIKE '%$pesq%' OR clinica.nota = $pesq ";
						$sql .= "OR clinica.uf LIKE '%pesq%' OR clinica.cidade LIKE '%clinica.cidade%'";
						ECHO $sql;
					 }
			break;
			case "Assistente":
				if ($pesq == "")
				{
					$sql = "SELECT assistente.nome,assistente.nota,clinica.nome,assistente.uf,assistente.cidade FROM assistente JOIN clinica WHERE clinica_id = clinica.id";
				}
				else {
						$sql = "SELECT cliente.nome,cliente.email,cliente.tipo_deficiencia,cliente.uf,cliente.cidade FROM cliente";
					 }
			break;
			case "Cliente":
				if ($pesq == "")
				{
					$sql = "SELECT cliente.nome,cliente.email,cliente.tipo_deficiencia,cliente.uf,cliente.cidade FROM cliente";
				}
				else {
						$sql = "SELECT cliente.nome,cliente.email,cliente.tipo_deficiencia,cliente.uf,cliente.cidade FROM cliente";
					 }
			break;
    
		}
		
	}
	
	
	

}

else {ECHO "ERRO CONEXÃO";}

?>

</body>
</html>

