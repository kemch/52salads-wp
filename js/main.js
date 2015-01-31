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

$('.js-figure').click(function(){
	// var collapsed = $(this).height();
	// if ($(this).attr('data-height') == collapsed) {
	// 	$(this).attr('data-height',collapsed);
	// } else {
	// 	console.log('false');
	// }
	var height = $(this).find('img').height();

	if ($(this).hasClass('zoom')) {
		$(this).removeClass('zoom');
		$(this).height('200px');
		setTimeout(function(){
		},400);
	} else {
		$(this).addClass('zoom').height(height);
		setTimeout(function(){
			$(this).height('auto');
		},400);
	}
});


$('.js-pinterest').click(function()   {ga('send', 'event', 'pinterest-nav', 'click',   'Social Links');});
$('.js-twitter').click(function()   {ga('send', 'event', 'twitter-nav', 'click',   'Social Links');});
$('.js-facebook').click(function()   {ga('send', 'event', 'facebook-nav', 'click',   'Social Links');});

