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

	$("#imagen").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').val();
		var formData = new FormData(this);
		$.ajax({
		    type: "POST",
		    url: url + '/actualizar',
		    data: formData,
		    success: function(data){
				var obj = $.parseJSON(data);
					$('#img2').attr('src', obj.nombre);	
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
				
		     },
			cache: false,
			contentType: false,
			processData: false
		});
	});


});