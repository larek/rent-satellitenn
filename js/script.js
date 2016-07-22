$(document).ready(function(){
	product_images = {
		'400white': '/images/460white.JPG',
		'400grey': '/images/460grey.JPG',
		'400black': '/images/460black.JPG',
		'460white': '/images/460white.JPG',
		'460grey': '/images/460grey.JPG',
		'460black': '/images/460black.JPG',
		'520white': '/images/520white.JPG',
		'520grey': '/images/520grey.JPG',
		'520black': '/images/520black.JPG',
	}

	$(".color").click(function(){
		var id = $(this).attr('id');
		var color = $(this).attr('data-color');
		console.log(".color-img-"+color);
		$(".color-img-"+id).attr('src',product_images[id+color]);
	});

	$(".btn-color").click(function(){
		$(".btn-color").removeClass('btn-primary');
		$(".btn-color").html("Выбрать");

		$(this).addClass('btn-primary');
		$(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
	});

	$(".btn-place").click(function(){
		$(".btn-place").removeClass('btn-primary');
		$(".btn-place").html("Выбрать");

		$(this).addClass('btn-primary');
		$(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
	});


	$('.input-daterange').datepicker({});
});