<?php
require_once("/../DAL/conexao.php");
$bd = new banco('ajudaaqui');
session_start();

$assistente = @$_SESSION['user']->fk;

$sql = "SELECT pedido.id, SUBSTRING(pedido.local,1,30) as nome FROM pedido INNER JOIN assistente
ON assistente.id = pedido.assistente_id
WHERE pedido.status = 1 AND assistente.id = $assistente";

var_dump($sql);

$data = mysqli_query($bd->conexaobd, $sql);
if(mysqli_num_rows($data) > 1)
{
	$sql = "SELECT pedido.id, SUBSTRING(pedido.local,1,30) as nome FROM pedido INNER JOIN assistente
ON assistente.id = pedido.assistente_id
WHERE pedido.status = 1 AND assistente.id = $assistente ORDER BY pedido.id DESC";
}
$data = mysqli_query($bd->conexaobd, $sql);
$dados = mysqli_fetch_object($data);

$pedidoId = $dados->id;
$pedido = $dados->nome;

$sql = "SELECT cliente.nome,cliente.id, pedido.local FROM pedido INNER JOIN cliente ON cliente.id = pedido.cliente_id WHERE pedido.id = $pedidoId";
$data = mysqli_query($bd->conexaobd, $sql);
$dados = mysqli_fetch_object($data);



//var_dump($sql);
?>

<div class="col-xs-12">
	<div class="content-box-header">
		<p>Pedido <i class="text-muted"><?php echo $pedido ?></i> Em Andamento</p>
	</div>
	<div class="content-box-large box-with-header">
		<p class="lead"><?php echo $dados->nome ?></p>
		<div>&nbsp;</div>
		<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control" id="us3-address" />
				</div>
			</div>
			<div id="us3" style="width: 100%; height: 400px;"></div>
			<div class="clearfix">&nbsp;</div>
		</div>
	<button class="btn btn-info col-xs-12" id="completar">Completar Pedido</button>
	<p class="text-right">Ajuda Aqui!</p>
	</div>
</div>
<script>
$(document).ready(function() {	

  $.ajax({
		url: "https://maps.googleapis.com/maps/api/geocode/json",
		data: {
			address: "<?php echo $dados->local ?>",
			key: "AIzaSyAHFQb-U9gOJUlA6jx_25oCqo8IXc-EXD8"
		},
		success: function(data) {
			loc = data.results[0].geometry.location;
		},
		async: false
	})

	$("#us3-address").on('keypress', function(ev) {
		ev.preventDefault();
	})

	$('#us3').locationpicker({
		location: {
			latitude: loc.lat,
			longitude: loc.lng
		},
		radius: 0,
		inputBinding: {
			locationNameInput: $('#us3-address')
		},
		enableAutocomplete: true,
  });

  $("#completar").on('click', function(event) {
  	event.preventDefault();
  	$.get({
  		url: "BLL/desativarPedido.php",
  		data: {
  			idPedido: "<?php echo $pedidoId ?>",
  			idAssistente: "<?php echo $assistente ?>"
  		},
  		success: function() {
  			window.location.replace('assistente.php');
  		}
  	})
  });
});
</script>