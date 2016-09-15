
	function requestAjax(formulario) {
		$.ajax({
			url: $(formulario).attr('action'),
			data: $(formulario).filter(':input').serializeArray(),
			method:$(formulario).attr('method'),
			cache:true,
			success: function() {
				$(formulario).filter('#success').removeClass('hidden');
				$(formulario).filter('#error').addClass('hidden');
			},
			error: function() {
				$(formulario).filter('#success').addClass('hidden');
				$(formulario).filter('#error').removeClass('hidden');
			}
		});
		return false;
	}
