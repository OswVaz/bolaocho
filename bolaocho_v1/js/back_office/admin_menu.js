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
					$('#img_1').attr('src', obj.nombre);
				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#paquetes").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});	

	$("#paquetesdos").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#paquete1").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#paquete2").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#paquete3").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});


	$("#paquete4").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#menu1").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});
	
	$("#menu2").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});	

	$("#promo_expecial1").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});
	$("#titulo_seccion").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});
	$("#promo_expecial2").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				if(data != ''){

				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

});
