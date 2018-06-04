$(function(){
	$("#logout").on('click',function() {
		$.ajax({
			type: "POST",
			url: 'Admin/logout',
			success: function(data){
				window.location.replace("Admin");
			},
		});
	});
	jQuery.noConflict();
	$('#myModal').modal('show');
	 var $lightbox = $("<div class='lightbox text-center'></div>");
  var $img = $("<img class ='img-responsive center-block lightbox_img'>");
  var $caption = $("<p class='caption'></p>");
  var $titulo = $("<h3 class='text-center white'></h3>");
  var $liga = $("<a class='text-center' target='_blank'></a>");

  // Add image and caption to lightbox

  $lightbox
	.append($titulo)
    .append($img)
    .append($caption)

    .append($liga);

  // Add lighbox to document

  $('body').append($lightbox);

  $('.lightbox-gallery img').click(function(e) {
    e.preventDefault();

    // Get image link and description
    var src = $(this).attr("src");
    var cap = $(this).attr("alt");
	var title = $(this).siblings('.title');
	var url = $(this).siblings('.url');
    // Add data to lighbox

    $img.attr('src', src);
    $caption.text(cap);
    $titulo.text(title.val());
    $liga.text(url.val()).attr('href', url.val());

    // Show lightbox

    $lightbox.fadeIn('fast');

    $('.lightbox').click(function() {
      $lightbox.fadeOut('slow');
    });
  });

});

