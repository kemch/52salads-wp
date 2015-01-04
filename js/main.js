$(function(){

	$('.js-details').click(function(e){
		var source = $(this);
		var target = $($(this).data('target'));
		if (target.is(':visible')) {
			target.slideUp(200);
		} else {
			target.slideDown(200);
		}
		e.preventDefault();
	});

});
