$('.novidades button').click(function() {
var vermais = $(".ver-mais");

	$('.novidades').toggleClass('painel-compacto');

	if ($('.novidades').hasClass("painel-compacto")) {
		$('.novidades').html.button("Ver Menos");
	}
	else
	{
		$('.novidades').html.button("Ver Mais");	
	}
});