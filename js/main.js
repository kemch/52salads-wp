$(function(){

	$('.js-nav-season').click(function(e){

	});

	$('.js-details').click(function(e){
		var source = $(this);
		var target = $($(this).data('target'));
		// var target = $($(this).data('target'));
		if (target.is(':visible')) {
			console.log('visible');
			target.slideUp(200);
		} else {
			console.log('not visible');
			target.slideDown(200);
		}
		console.log(target);
	});

});
