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

	$('#header h1 a.logo').html('<img src="'+homeRoot+'/images/layout/logo.png" />');
	
	$(".mycarousel").jcarousel({
		itemLoadCallback: mycarousel_itemLoadCallback,
		visible:1,
		scroll: 1,
		auto: 4, // seconds
		wrap: "both",
		// This tells jCarousel NOT to autobuild prev/next buttons
		//buttonNextHTML: null,
		//buttonPrevHTML: null
	});
})

function getImageBG(section) {
	arraySection = section.split(" ");;
	var arrayImageBg = new Array(); 

	arrayImageBg = {
		'home' : {
			'default' : 'fusion-del-oro-624023.jpg'},
		'perlen' : {
			'tahiti-perlen' : 'napo-uw-greatb-reef.jpg',
			'sudsee-perlen' : 'perlen.jpg',
			'akoya-perlen' : 'perlen.jpg',
			'chin-sudwaser-perlen' : 'perlen.jpg',
			'default' : 'napo-uw-greatb-reef.jpg'	
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

function mycarousel_itemLoadCallback(carousel, state) {
	// Check if the requested items already exist
	if (carousel.has(carousel.first, carousel.last)) {
		return;
	}

	jQuery.get(
		homeRoot+'/images_slider.php',
		{
			first: carousel.first,
			last: carousel.last,
			subsection: $(".mycarousel").data('subsection')
		},
		function(xml) {
			mycarousel_itemAddCallback(carousel, carousel.first, carousel.last, xml);
		},
		'xml'
	);
};

function mycarousel_itemAddCallback(carousel, first, last, xml) {
	// Set the size of the carousel
	carousel.size(parseInt(jQuery('total', xml).text()));

	jQuery('image', xml).each(function(i) {
		carousel.add(first + i, mycarousel_getItemHTML(jQuery(this).text()));
	});
};

function mycarousel_getItemHTML(url){
	return '<img src="' + url + '" alt="" />';
};
