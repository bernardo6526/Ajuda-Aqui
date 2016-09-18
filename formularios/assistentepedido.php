<div class="col-xs-12">
	
	<div class="content-box-large box-with-header">
		<form>
			
			<p class="lead">Pedido</p>
			<table class="table" style="font-size:14px">
				<thead>
					<tr>
						<th>Cliente</th>
						<th>Local</th>
						<th>Horário</th>
						
					</tr>
				</thead>
				<tbody class="">
					<?php
						session_start();
						require_once("../DAL/conexao.php");
						$bd = new banco('ajudaaqui');
												
						$sql = "SELECT cliente.nome,pedido.local,pedido.data_hora FROM pedido JOIN cliente WHERE cliente_id = cliente.id AND Assistente_id =".$_SESSION['user']->id;
						$sql .=" ORDER BY cliente.nome LIMIT 10";
						$result = mysqli_query($bd->conexaobd, $sql);

						for ($i=0; $i < mysqli_num_rows($result); $i++) { 
							$linha = mysqli_fetch_object($result);

							$table = "<tr class=''><td class='id'>$linha->nome</td>";
							$table .= "<td class=''>$linha->local</td>";
							$table .= "<td class=''>$linha->data_hora"
							?>
							<div class="input-group-addon">
								<button data-target="#us6-dialog" data-toggle="modal" class="btn-link" style="text-decoration:none" onclick="alert('Peidei e sai correndo, pau no cu de quem ta lendo')">Aceitar</button>
							</div>
							<?php $table.="</td></tr>";
							

							echo $table;
						}
					?>
				</tbody>
			</table>
			
			<p class="text-right">Ajuda Aqui!</p>
		</form>
		
	</div>
</div>
<script>
	
</script>
