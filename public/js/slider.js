$(document).ready(function(){
	resizeWindow();
	function resizeWindow(e){
		var newWindowWidth = $(window).width();
			
		if(newWindowWidth < 768){
			// Если ширина меньше 600 px, используется таблица стилей для мобильного
			$('.slider').slick({
				infinite: true,
				slidesToShow: 1,
				speed: 300,
				adaptiveHeight: true,
			});
		} 
		else if(newWindowWidth > 768){
			// Если ширина больше 600 px, используется таблица стилей для десктопа
			$('.slider').slick({
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 3,
				adaptiveHeight: true,
			});
		}
	}
	
	$(window).bind("resize", function(){
		$('.slider').slick('unslick');
		resizeWindow();
	});
});