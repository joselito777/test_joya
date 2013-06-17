$(function(){
	$("body").ezBgResize({
		img : "images/layout/fusion-del-oro-624023.jpg",
		opacity : 1, 
		center  : true 
	});

	$('nav ul li').first().css('border-top', '1px solid #ffffff');

	$('nav ul li').bind('mouseenter', function() {
		$(this).children('ul').stop().slideDown();
	});
	$('nav ul li').bind('mouseleave', function() {
		$(this).children('ul').stop().slideUp();
	});

	$('#header h1 a.logo').html('<img src="images/layout/logo.png" />')
})