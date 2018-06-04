$(function(){
	$("#seccion1").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').text();
		var formData = new FormData(this);
		$.ajax({
			   type: "POST",
			   url: url + '/actualizar',
			   data: formData,
			   success: function(data){
				   console.log(data); // show response from the php script.
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
			 location.assign(url);
	});

	$("#seccion2").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').text();
		var formData = new FormData(this);
		$.ajax({
			   type: "POST",
			   url: url + '/actualizar',
			   data: formData,
			   success: function(data){
				   console.log(data); // show response from the php script.
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
			 location.assign(url);
	});

	$("#seccion3").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').text();
		var formData = new FormData(this);
		$.ajax({
			   type: "POST",
			   url: url + '/actualizar',
			   data: formData,
			   success: function(data){
				   console.log(data); // show response from the php script.
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
			 location.assign(url);
	});

	$("#seccion4").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').text();
		var formData = new FormData(this);
		$.ajax({
			   type: "POST",
			   url: url + '/save_images',
			   data: formData,
			   success: function(data){
				   console.log(data); // show response from the php script.
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
			 //location.assign(url);
	});

	$("#seccion5").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').text();
		var formData = new FormData(this);
		$.ajax({
			   type: "POST",
			   url: url + '/actualizar',
			   data: formData,
			   success: function(data){
				   console.log(data); // show response from the php script.
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
			 location.assign(url);
	});

	$("#delete_pictures").submit(function(e) {
		e.preventDefault();
		var url = $('.page_name').text();
		var formData = new FormData(this);
		$.ajax({
			   type: "POST",
			   url: url + '/delete_pictures',
			   data: formData,
			   success: function(data){
				   console.log(data); // show response from the php script.
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
			 location.assign(url);
	});

	$("#login").submit(function(e) {
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
			type: "POST",
			url: 'Admin/login',
			data: formData,
			success: function(data){
			if(data == 'true'){
				location.reload();
			}else{
				$('.modal_error').empty();
				$('.modal_error').append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span class="glyphicon glyphicon-error" aria-hidden="true"></span>   El usuario y/o contraseña son datos incorrectos.</div>');
			}
		},
			cache: false,
			contentType: false,
			processData: false
		});
	});

	$("#paginas").submit(function(e) {
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
			type: "POST",
			url: 'Admin_paginas/actualizar_paginas',
			data: formData,
			success: function(data){
				$('.modal_error').empty();
				$('.modal_error').append('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span class="glyphicon glyphicon-error" aria-hidden="true"></span>   Guardado con éxito</div>');
		},
			cache: false,
			contentType: false,
			processData: false
		});
	});

var url = $('.page_name').text();

Dropzone.options.dropzone1 = {
  init: function() {
    this.on("success", function() {
    	 alert("Added file.");
    	 });
  }
};

Dropzone.options.dropzone1 = {
  completemultiple: function(file){
		$.ajax({
		   type: "POST",
			   url: url + '/refresh_gallery',
			   success: function(data){
				   $( ".prev_gallery" ).replaceWith('<div class = "row prev_gallery">'+data + '<div>');
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
		$.ajax({
			type: "POST",
			url: url + '/refresh_hidde_gallery',
			   success: function(data){
				   $( ".hidden_images" ).replaceWith( data );
			   },
				cache: false,
				contentType: false,
				processData: false
			 });
	  }


};

});
function select_all(check_state){
	$("input[name*=img]").each(function() {  this.checked = check_state;});
}
function save_img(e){
	var form = e.closest('.gallery_form');
	var file_img = $(form).find('.file_gallery:first')[0];
	var img_title = $(form).find('.img_title:first')[0];
	var img_url = $(form).find('.img_url:first')[0];
	var img_desc = $(form).find('.img_desc:first')[0];
	var formData = new FormData();
	file_name = '';
	if($(file_img).val() != ''){
		file_name = $(file_img)[0].files[0], $(file_img)[0].files[0].name
	}else{
		file_name = $('.name_img_hidden').val();
		}
	formData.append('back_img', file_name);
	formData.append('img_title', $(img_title).val());
	formData.append('img_url', $(img_url).val());
	formData.append('img_desc', $(img_desc).val());
	formData.append('opt', 'save');

	$.ajax({
		cache: false,
		contentType: false,
		processData: false,
		type: "POST",
		url: 'Admin_novias/ajax_handle',
		data:formData,
		datatype: 'json',
		success: function(data){
			string = draw_panel_new_gallery(data);
			$(form).children().remove();
			$(form).append(string);

		},
	});
}
function remove_img(e){
	var form = e.closest('.gallery_form');
	var file_img = $(form).find('.gallery_img:first')[0];
	var formData = new FormData();
	formData.append('back_img', file_img.src);
	formData.append('opt', 'del');
	$.ajax({
		cache: false,
		contentType: false,
		processData: false,
		type: "POST",
		   url: 'Admin_novias/ajax_handle',
		   data:formData,
		   success: function(data){
			 $(form).parent().remove();
		   },
	});
}
function draw_new_img(){
	$('.files').append('<div class="col-sm-6"><form class = "gallery_form" method = "post"><div class="panel panel-default"><div class="panel-body"><div class="row"><div class="col-sm-12"><input type="file" class="form-control file_gallery"><br></div></div><div class="row"><div class="col-sm-12"><input type="text" class="form-control img_title" placeholder="Titulo de la imagen"><br></div><div class="col-sm-12"><input type="text" class="form-control img_url" placeholder="Url"><br></div><div class="col-sm-12"><textarea class="form-control img_desc" rows="3" placeholder="Descripción"></textarea><br></div></div><div class="row pull-right"><div class="col-sm-12"><button type="button" class="btn btn-default " onclick="save_img(this);">Guardar</button><button type="button" class="btn btn-default " onclick="remove_img(this);">Eliminar</button></div></div></div></div></form></div>');
}
function draw_panel_new_gallery(json){
	var jsonToArray = JSON.parse(json);
	var panel = '<div class="panel panel-default"><div class="panel-body"> <div class="row"> <div class="col-sm-12"><img class="img-responsive gallery_img center-block" src="_IMG$"><br><input type="file" class="form-control file_gallery"><input type = "hidden" class = "name_img_hidden" value = "_IMG$"><br></div></div><div class="row"> <div class="col-sm-12"><input type="text" class="form-control img_title" placeholder="Titulo de la imagen" value="_TITLE$"><br></div><div class="col-sm-12"><input type="text" class="form-control img_url" placeholder="Url" value="_URL$"><br></div><div class="col-sm-12"><textarea class="form-control img_desc" rows="3" placeholder="Descripción" value="_DESC$">_DESC_TEXT$</textarea><br></div></div><div class="row pull-right"> <div class="col-sm-12"><button type="button" class="btn btn-default " onclick="save_img(this);">Guardar</button><button type="button" class="btn btn-default " onclick="remove_img(this);">Eliminar</button></div></div></div></div>';
	panel = panel.replace("_IMG$", jsonToArray[0].img);
	panel = panel.replace("_IMG$", jsonToArray[0].img);
	panel = panel.replace("_TITLE$", jsonToArray[0].title);
	panel = panel.replace("_URL$", jsonToArray[0].url);
	panel = panel.replace("_DESC$", jsonToArray[0].desc);
	panel = panel.replace("_DESC_TEXT$", jsonToArray[0].desc);
	return panel;
	}
