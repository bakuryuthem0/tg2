$(document).ready(inicia);
function inicia ()
{
	$("html").niceScroll();
	$(window).resize(function(){
		if (document.body) 
		{
			var width = document.body.clientWidth;	
			var height = document.body.clientHeight;
		}else
		{
			var width = window.width;
			var height = window.height;
		}
		$('.cuadro').css('min-height',height);
		$('#articulos').css('min-height',height-(height*0.4));
		$('#contactenos').css('height',height-(height*0.3));
	});
	if (document.body) 
	{
		var width = document.body.clientWidth;	
		var height = document.body.clientHeight;
	}else
	{
		var width = window.width;
		var height = window.height;
	}
	$('.cuadro').css('min-height',height);
	$('#articulos').css('height',height-(height*0.4));
	$('#contactenos').css('height',height-(height*0.3));
}