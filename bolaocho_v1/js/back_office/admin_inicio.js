$(function(){    
	$("#carousel_1").submit(function(e) {
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
					$('#carousel_1_img').attr('src', obj.nombre);	
					console.log('true');
				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#carousel_2").submit(function(e) {
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
					$('#carousel_2_img').attr('src', obj.nombre);	
					console.log('true');
				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#carousel_3").submit(function(e) {
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
					$('#carousel_3_img').attr('src', obj.nombre);	
					console.log('true');
				}
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});


	$("#horarios").submit(function(e) {
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

	$("#promos").submit(function(e) {
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

	$("#video").submit(function(e) {
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

	$("#calidad").submit(function(e) {
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

	$("#profesionalismo").submit(function(e) {
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


	$("#competencias").submit(function(e) {
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

	$("#premiacion").submit(function(e) {
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
	
	$("#socialnet").submit(function(e) {
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

	$("#alimentos").submit(function(e) {
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
	$("#evento").submit(function(e) {
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
