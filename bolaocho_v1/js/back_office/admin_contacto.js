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
					$('#img1').attr('src', obj.nombre);	
				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#vacantes").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});


});

function vacante_nueva(e){
	var formData = new FormData();
	formData.append('id', e.closest('.padre').find('.id').val());
	formData.append('vacante', e.closest('.padre').find('.vacante').val());
	formData.append('descripcion', e.closest('.padre').find('.descripcion').val());
	formData.append('horarios', e.closest('.padre').find('.horarios').val());
	formData.append('estatus', e.closest('.padre').find('.estatus').val());

	var url = $('.page_name').val();
	$.ajax({
	    type: "POST",
	    url: url + '/vacante_nueva',
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


function eliminar_vacantes(e){
	var formData = new FormData();
	formData.append('id', e.closest('.padre').find('.id').val());
	var url = $('.page_name').val();
	$.ajax({
	    type: "POST",
	    url: url + '/eliminar_vacantes',
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