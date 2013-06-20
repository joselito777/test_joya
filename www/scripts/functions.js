$(function(){
	$('body.home').ezBgResize({
		img : homeRoot+'/images/layout/fusion-del-oro-624023.jpg',
		opacity : 1, 
		center  : true 
	});

	$('nav ul li').first().css('border-top', '1px solid #ffffff');

	$('nav ul li').bind('mouseenter', function() {
		if(!$(this).hasClass('active')) {
			$(this).children('ul').stop().slideDown(); }
	});
	$('nav ul li').bind('mouseleave', function() {
		if(!$(this).hasClass('active')) {
			$(this).children('ul').stop().slideUp(); }
	});
	
	$('.fancybox').fancybox({
		nextSpeed : 500,
		prevSpeed : 500
	});

	$('#header h1 a.logo').html('<img src="'+homeRoot+'/images/layout/logo.png" />');
})