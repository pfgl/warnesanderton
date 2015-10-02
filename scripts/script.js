// On load

// Fade Hyperlinks

$(document).ready(function() {
	$('#content a, .menu a').dwFadingLinks({
		color: '#a40d36',
		duration: 700
	});

	// Add PDF icon to downloads
	$("a[href$='.pdf']").addClass("pdf-download");

	// Home Page Slider
	$('#slider').nivoSlider({
		effect: 'sliceDown',
		pauseTime: 6000,
		directionNav: false,
		controlNav: true,
		pauseOnHover: false
	});


	// Footer Happy Clients
	$('#happy-clients').cycle ({
		fx:  'fade',
		timeout: 12000,
		speed: 'slow',
		pause: 1
	});

	// blinking alert icon
	$("#alert-image").cyclicFade({
		repeat: 0,
		params: [{fadeout:250, stayout:500, opout:0, fadein:250, stayin:1000, opin:1}]
	});

	// animate banner images

	$('.banner').hover(function() { //On hover...

		var thumbOver = $(this).find('img').attr('src'); //Get image url and assign it to 'thumbOver'

		//Set a background image(thumbOver) on the <a> tag - Set position to bottom
		$(this).css({'background' : 'url(' + thumbOver + ') no-repeat center bottom'});

		//Animate the image to 0 opacity (fade it out)
		$(this).find('img').stop().fadeTo('normal', 0 , function() {
			$(this).hide() //Hide the image after fade
		});
	} , function() { //on hover out...
		//Fade the image to full opacity
		$(this).find('img').stop().fadeTo('normal', 1).show();
	});

});



