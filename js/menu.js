$(document).ready(main);

function main() {
	$('.menu-bar').click(function() {
		//$('nav').toggle(); //Oculta y muestra el menu

		/*if(contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			$('nav').animate({
				left: '-100%'
			});
			contador = 1;
		}*/

		if($('nav').is(":hidden")) {
			$('nav').slideDown();
		} else {
			$('nav').slideUp();
		}
	});

	$(window).on('resize', function() {
		if($(window).width() <= 768) {
			$('nav').hide();
		} else {
			$('nav').show();
		}
	});
}