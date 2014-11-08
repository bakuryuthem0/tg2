$(document).ready(function(){
	$('.navbar-toggle').toggle(function(){
		$('.menusera').css({'display':'block'}).animate({'opacity':1},500)
	},function(){
		$('.menusera').animate({'opacity':0},500,function(){
			$(this).css({'display':'none'})
		})
	})
	$(window).resize(function()
	{
		if ($(window).width()>991) {
			$('.menusera').css({'display':'block'}).animate({'opacity':1},500)
		}else
		{
			$('.menusera').animate({'opacity':0},500,function(){
			$(this).css({'display':'none'})
		})
		}
	})
})
$(document).ready(function(){
	$('#banner').css('height',$(window).height());
	$('#banner img').css('height',$(window).height());
	$(window).resize(function(){
		$('#banner').css('height',$(window).height());
		$('#banner img').css('height',$(window).height());
	})
})
$(document).ready(function(){
	$('.serv_mini').click(function(){
		var nombre = $(this).attr('id');
		var id = $(this).attr('data-option-value');
		dataPost = {'nombre':nombre,'id':id};
		$.ajax({
                url:'../ajax',
                type:'POST',
                data: dataPost,
                dataType:'json',
                beforeSend:function()
                {
                	$('#desc').css('../images/prettyPhoto/dark_square/loader.gif');
                },
                success:function(response)
                {
                    if(response.success)
                    {
                    	$('.h_titulo').animate({'opacity':0},500,function(){$(this).remove();$('#titulo_servicio').append('<h2 class="h_titulo">'+response.titulo.replace('_',' ').toUpperCase()+'</h2>')})
                    	$('#loading').animate({'opacity':0},500,function(){$(this).remove()})
                    	$('.text_description').animate({'opacity':0},500,function(){
                    		$(this).remove();
                    		$('#text').append('<p class="text_description"> '+response.desc+'</p>')
                        })                    
                        $('#img_titulo').animate({'opacity':0},500,function(){
                        	$(this).remove();
                        	$('#titulo_servicio').append('<h2 class="h_titulo">'+response.titulo.replace('_',' ').toUpperCase()+'</h2>');
                        })                    

                    }else{
						alert('llego mal')
                    }
                },
                error:function()
                {
                	$('.loader').remove();
                    alert('error feo')
                }

            });
	})
})