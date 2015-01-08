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

$(function(){
	var menu = $('.js-menu');
	var nav = $('.js-nav');
	menu.on('touchstart click', function(e){
		if (nav.is(':visible')) {
			nav.slideUp(200, function(){
				nav.attr('style','');
			});
		} else {
			nav.slideDown(200);
		}
		e.preventDefault();
	});
});
