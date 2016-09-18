<div class="col-xs-12">
	
	<div class="content-box-large box-with-header">
		<form>
			
			<p class="lead">Clínica</p>
		<?php 
				session_start();
				require_once("../DAL/conexao.php");
				$bd = new banco('ajudaaqui');
												
				$sql = "SELECT clinica.nome,clinica.telefone,clinica.uf,clinica.cidade,clinica.bairro,clinica.logradouro,clinica.numero,clinica.complemento FROM assistente JOIN clinica WHERE clinica_id = clinica.id AND assistente.id =".$_SESSION['user']->id;
				$sql .=" ORDER BY clinica.nome LIMIT 10";
				$result = mysqli_query($bd->conexaobd, $sql);
				$linha = mysqli_fetch_object($result);
				if ($linha->nome != "Nenhuma")
			{			
							
		?>
			<table class="table" style="font-size:14px">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Telefone</th>
						<th>UF</th>
						<th>Cidade</th>
						<th>Bairro</th>
						<th>Logradouro</th>
						<th>Número</th>
						<th>Complemento</th>
						
					</tr>
				</thead>
				<tbody class="">
		<?php
							$table = "<tr class=''><td class='id'>$linha->nome</td>";
							$table .= "<td class=''>$linha->telefone</td>";
							$table .= "<td class=''>$linha->uf</td>";
							$table .= "<td class=''>$linha->cidade</td>";
							$table .= "<td class=''>$linha->bairro</td>";
							$table .= "<td class=''>$linha->logradouro</td>";
							$table .= "<td class=''>$linha->numero</td>";
							$table .= "<td class=''>$linha->complemento</td></tr></tbody></table>";
							ECHO $table;
			}
			
			else { ?>
							
							

			<p>Você ainda não está associado a nenhuma clínica</p>		
			<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="form-control input-lg" placeholder="Login - Clínica" name="login" />
							<span class="input-group-btn">
								<input class="btn btn-info btn-lg" type="submit" value="Associar">						
							</span>
						</div>
					</div>
					
				
			<?php 
				} 
			?>
			<p class="text-right">Ajuda Aqui!</p>
		</form>
		
	</div>
</div>
<script>
	
</script>
		
