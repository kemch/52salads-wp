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

var currentPage = 'a[href="' + window.location.hash + '"]';
if ($('.single-vinaigrettes').length) {
	showVin($(currentPage));
}

$(function(){
	$('.section-vinaigrettes').show();
	var vin = $('.vin-list li a');
	vin.each(function(){
		$(this).on('touchstart click', function(e){
			showVin($(this));
			e.preventDefault();
		});
	});
});
function showVin(el, e) {
	var url = el.attr('data-url');
	var hash = el.attr('href');
	var title = '52 salads | ' + el.text();
	$('.section-hero').slideUp(400);
	$('.vin-list li').removeClass('active');
	el.parents('li').addClass('active');
	$('.post-vinaigrettes').slideUp(200);
	$.ajax({
		url: url,
		cache: false
	}).done(function(html){
		console.log('done');

		window.history.pushState("", title, hash);
		$('.post-vinaigrettes').html(html).hide();
		setTimeout(function(){
			$('.post-vinaigrettes').fadeIn(200);
		},400);
	});
}

