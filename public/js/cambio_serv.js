$(document).ready(function(){
	$('.serv_img').click(function()
	{
		var datos = {'nombre':$(this).attr(id)}
		$.ajax({
			url:'buscar.php',
			type:'post',
			data: datos,
			dataType: 'json',
			beforesend:function(){console.log('cargando')},
			success:function(){alert('llego')},
			error:function(){alert('error')}
		})
	})
})