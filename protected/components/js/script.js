$(function() 
	{ 
		$('a[data-toggle="tab"]').on('shown', function (e) { 
				localStorage.setItem('ultimoContenido', $(e.target).attr('href')); 
		});
		 
		var ultimoContenido = localStorage.getItem('ultimoContenido'); 
		if (ultimoContenido) { 
			$('ul.nav-tabs').children().removeClass('active');
			$('a[href="' + ultimoContenido +'"]').tab('show');
			$('div.tab-content').children().removeClass('active');
			$(ultimoContenido).addClass('active');
		} 
	});