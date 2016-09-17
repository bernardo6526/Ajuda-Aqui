<div class="col-xs-12">
	<div class="content-box-header">
		<h4>Escolha Sua Localização</h4>
	</div>
	<div class="content-box-large box-with-header">
		<form>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><button data-target="#us6-dialog" data-toggle="modal" class="btn-link" style="text-decoration:none">Procurar</button></div>
					<input type="text" placeholder="Localização" name="localizacao" id="localizacao" required disabled class="form-control">
				</div>
			</div>
			<p class="lead">Faça Um pedido</p>
			<table class="table" style="font-size:14px">
				<thead>
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Nota</th>
					</tr>
				</thead>
				<tbody class="">
					<?php
						require_once("../DAL/conexao.php");
						$bd = new banco('ajudaaqui');
						
						$sql = "SELECT id, nome, telefone, nota FROM assistente ORDER BY nota LIMIT 10";
						$result = mysqli_query($bd->conexaobd, $sql);

						for ($i=0; $i < mysqli_num_rows($result); $i++) { 
							$linha = mysqli_fetch_object($result);

							$table = "<tr class='assistente'><td class='id'>$linha->id</td>";
							$table .= "<td class='nome'>$linha->nome</td>";
							$table .= "<td class='telefone'>$linha->telefone</td>";
							$table .= "<td class='nota'>$linha->nota</td></tr>";

							echo $table;
						}
					?>
				</tbody>
			</table>
			<input id="selecionado" type="text" disabled required class="form-control" placeholder="Assistente Selecionado">
			<div class="">	
				<input type="submit" value="Pedir!" class="btn btn-primary col-xs-12" style="margin-top:30px">
			</div>
			<p class="text-right">Ajuda Aqui!</p>
		</form>
		<div id="us6-dialog" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Ajuda Aqui! - Pedido</h4>
					</div>
					<div class="modal-body">
						<div class="form-horizontal" style="width: 550px">
							<div class="form-group">
								<label class="col-sm-2 control-label">Endereço:</label>

								<div class="col-sm-10">
									<input type="text" class="form-control" id="us3-address" />
								</div>
							</div>
							<div id="us3" style="width: 100%; height: 400px;"></div>
							<div class="clearfix">&nbsp;</div>

							<div class="clearfix"></div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" id="escolher" class="btn btn-primary col-xs-12">Escolher</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#us3').locationpicker({
			location: {
				latitude: -19.93637136851032,
				longitude: -43.96629785152055
			},
			radius: 0,
			inputBinding: {
				locationNameInput: $('#us3-address')
			},
			enableAutocomplete: true
		});
		$('#us6-dialog').on('shown.bs.modal', function () {
			$('#us3').locationpicker('autosize');
		});

		$('tr.assistente').on('click', function() {
			$('tr.active').removeClass('active');
			$(this).addClass('active');
			$nome = $('tr.active td.nome').text();
			$('#selecionado').val($nome);
		});

		$("#escolher").on('click', function() {
			$endereco = $('#us3-address').val();
			$('#us6-dialog').modal('toggle');
			$('#localizacao').val($endereco);
		});

	})
</script>