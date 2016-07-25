$(document).ready(function(){



	$(".btn-color").click(function(){		

		if($(this).hasClass('btn-primary')){
			$(".btn-color").removeClass('btn-primary');
			$(".btn-color").html("Выбрать");
			$(this).addClass('btn-default');
		}else{
			$(".btn-color").removeClass('btn-primary');
			$(".btn-color").html("Выбрать");
			$(this).addClass('btn-primary');
			$(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
		}
	});

	$(".btn-place").click(function(){

		if($(this).hasClass('btn-primary')){
			$(".btn-place").removeClass('btn-primary');
			$(".btn-place").html("Выбрать");
			$(this).addClass('btn-default');
		}else{
			$(".btn-place").removeClass('btn-primary');
			$(".btn-place").html("Выбрать");
			$(this).addClass('btn-primary');
			$(this).html('<i class="fa fa-check" aria-hidden="true"></i> Выбрано');
		}
		
	});


	$('.input-daterange').datepicker({});
});