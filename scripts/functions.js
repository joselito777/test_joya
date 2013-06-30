$(function(){

	var imageBg = getImageBG($('body').attr('class'));
	$('body').ezBgResize({
		img : homeRoot+'/images/backgrounds/'+imageBg,
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

function getImageBG(section) {
	arraySection = section.split(" ");;
	var arrayImageBg = new Array(); 

	arrayImageBg = {
		'home' : {
			'default' : 'fusion-del-oro-624023.jpg'},
		'perlen' : {
			'tahiti-perlen' : 'napo-uw-greatb-reef.jpg',
			'default' : 'perlen.jpg'	
		}, 
		'default' : 'fusion-del-oro-624023.jpg'
	}

	if(arraySection[0] in arrayImageBg) {
		auxSection = arraySection[0];
		if(arraySection[1] in arrayImageBg[auxSection]) {
			auxSectionSub = arraySection[1];
			return arrayImageBg[auxSection][auxSectionSub];
		}
		else{
			return arrayImageBg[auxSection]['default'];	
		}
	}
	else {
		return arrayImageBg['default'];	
	}

}