$(function(){    
	$("#baner").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){
					var obj = $.parseJSON(data);
					$('#img_s1').attr('src', obj.nombre);	
				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#img").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				var obj = $.parseJSON(data);
					$('#img1').attr('src', obj.nombre);	
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});
});

function guardar_jugadores(e){
	var formData = new FormData();
	formData.append('id', e.closest('.padre').find('.id').val());
	formData.append('lugar', e.closest('.padre').find('.lugar').val());
	formData.append('nombre', e.closest('.padre').find('.nombre').val());
	formData.append('edad', e.closest('.padre').find('.edad').val());
	formData.append('Jornadas', e.closest('.padre').find('.Jornadas').val());
	formData.append('JG', e.closest('.padre').find('.JG').val());
	formData.append('JG2', e.closest('.padre').find('.JG2').val());
	formData.append('JP', e.closest('.padre').find('.JP').val());
	formData.append('JP2', e.closest('.padre').find('.JP2').val());
	formData.append('jugados', e.closest('.padre').find('.jugados').val());
	formData.append('DF', e.closest('.padre').find('.DF').val());
	formData.append('puntos', e.closest('.padre').find('.puntos').val());
	formData.append('orden', e.closest('.padre').find('.orden').val());

	var url = $('.page_name').val();
	$.ajax({
	    type: "POST",
	    url: url + '/jugador_nuevo',
	    data: formData,
	    success: function(data){
			if(data !== 'false'){
				$('.borrar').html(data);
			}
	     },
		cache: false,
		contentType: false,
		processData: false
	});
}


function eliminar_jugadores(e){
	var formData = new FormData();
	formData.append('id', e.closest('.padre').find('.id').val());
	var url = $('.page_name').val();
	$.ajax({
	    type: "POST",
	    url: url + '/eliminar_jugador',
	    data: formData,
	    success: function(data){
			if(data !== 'false'){
				$('.borrar').html(data);
			}
	     },
		cache: false,
		contentType: false,
		processData: false
	});
}