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
						<input type="radio" name="tabela" value="Clinica">Clínica
					</label>
					<label class="radio-inline">
						<input type="radio" name="tabela" value="Assistente">Assistente
					</label>
					<label class="radio-inline">
						<input type="radio" name="tabela" value="Cliente">Cliente
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

	require_once("../BLL/relatoriosBLL.php");
	$rBLL = new relatorioBLL();



	if (isset ($_POST['tabela']))
	{
		$tabela = $_POST['tabela'];
		ECHO $tabela;
		
		
		if(isset($_POST['pesq']))
		{
			$pesq = $_POST['pesq'];
			ECHO $pesq;
		}
		else 
		{
			$pesq = "";
			
		}
		
		switch ($tabela) 
		{
			case "Clinica":
				if ($pesq == "")
				{
					$sql = "SELECT clinica.nome,clinica.nota,clinica.telefone,clinica.uf,clinica.cidade FROM clinica";
				}
				else {
						$sql = "SELECT clinica.nome,clinica.nota,clinica.telefone,clinica.uf,clinica.cidade FROM clinica WHERE clinica.nome LIKE '%$pesq%' OR clinica.nota = '$pesq' OR clinica.telefone = '$pesq' ";
						$sql .= "OR clinica.uf LIKE '%$pesq%' OR clinica.cidade LIKE '%$pesq%'";
						ECHO $sql;
					 }
					 
					ECHO $rBLL->pesqClinica($sql);
					
			break;
			case "Assistente":
				if ($pesq == "")
				{
					$sql = "SELECT assistente.nome,assistente.nota,assistente.telefone,assistente.email,assistente.tipo,assistente.certificado,clinica.nome,assistente.uf,assistente.cidade FROM assistente JOIN clinica WHERE clinica_id = clinica.id";
				}
				else {
						$sql = "SELECT assistente.nome,assistente.nota,assistente.telefone,assistente.email,assistente.tipo,assistente.certificado,clinica.nome,assistente.uf,assistente.cidade FROM assistente JOIN clinica WHERE clinica_id = clinica.id ";
						$sql .= "OR assistente.nome LIKE '%$pesq%' OR assistente.nota = '$pesq' OR assistente.telefone LIKE '%$pesq%' OR assistente.email LIKE '%$pesq%' OR assistente.tipo LIKE '%$pesq%' OR assistente.certificado LIKE '%$pesq%' OR clinica.nome LIKE '%$pesq%' OR assistente.uf LIKE '%$pesq%' ";
						$sql .= "OR assistente.cidade LIKE '%$pesq%'";
						ECHO $sql;
					 }
					 
					 ECHO $rBLL->pesqAssistente($sql);
			break;
			case "Cliente":
				if ($pesq == "")
				{
					$sql = "SELECT cliente.id,cliente.nome,cliente.telefone,cliente.email,cliente.nascimento,cliente.tipo_deficiencia,";
					$sql .=" cliente.cpf,cliente.rg,cliente.uf,cliente.cidade,cliente.cep,cliente.bairro,cliente.logradouro,cliente.numero,cliente.complemento FROM cliente";
				}
				else {
						$sql = "SELECT cliente.id,cliente.nome,cliente.telefone,cliente.email,cliente.nascimento,cliente.tipo_deficiencia,cliente.cpf,cliente.rg,cliente.uf,";
						$sql .= "cliente.cidade,cliente.cep,cliente.bairro,cliente.logradouro,cliente.numero,cliente.complemento FROM cliente WHERE cliente.id LIKE '%$pesq%' OR cliente.nome LIKE '%$pesq%' ";
						$sql .= "OR cliente.telefone LIKE '%$pesq%' OR cliente.email LIKE '%$pesq%' OR cliente.nascimento LIKE '%$pesq' OR cliente.tipo_deficiencia LIKE '%$pesq%'";
						$sql .= "OR cliente.cpf LIKE '%$pesq%' OR cliente.rg LIKE '%$pesq%' OR cliente.uf LIKE '%$pesq' OR cliente.cidade LIKE '%$pesq%'";
						$sql .= "OR cliente.cep LIKE '%$pesq%' OR cliente.bairro LIKE '%$pesq%' OR cliente.logradouro LIKE '%$pesq' OR cliente.numero LIKE '%$pesq%'";
						$sql .= "OR cliente.complemento LIKE '%$pesq%' ";
						ECHO $sql;
					 }
				 ECHO $rBLL->pesqCliente($sql);	 

			break;
    
		}
		
		
		
	}
	else{ECHO "Radiobtn bugou";}
	
	
	





?>

</body>
</html>

