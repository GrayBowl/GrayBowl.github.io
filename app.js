var main = function(){

	$( "li" ).hover( //menu hovering
		function() {
			$(this).addClass('hoveringMenu');
		}, function() {
			$(this).removeClass('hoveringMenu');
		}
		);

	$(window).bind('scroll', function () {
    	if ($(window).scrollTop() > 100){
        	$('.menu').addClass('fixed');
    	}
    	else{
        $('.menu').removeClass('fixed');
    	}
	});

	$('.menuA').click(function(){ //about animation
		$('.aboutHeader').addClass('animated shake');
	});
	$('.aboutHeader').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
		function(){
			$(this).removeClass("animated shake")
		});

	$('.menuP').click(function(){
		$('.projectsHeader').addClass('animated shake');
	});
	$('.projectsHeader').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
		function(){
			$(this).removeClass("animated shake")
		});

	$('.menuR').click(function(){
	$('.resumeHeader').addClass('animated shake');
	});
	$('.resumeHeader').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
		function(){
			$(this).removeClass("animated shake")
		});

	$('.menuC').click(function(){
	$('.contactHeader').addClass('animated shake');
	});
	$('.contactHeader').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
		function(){
			$(this).removeClass("animated shake")
		});

		$('.menuS').click(function(){
	$('.socialHeader').addClass('animated shake');
	});
	$('.socialHeader').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
		function(){
			$(this).removeClass("animated shake")
		});

};

$(document).ready(main);