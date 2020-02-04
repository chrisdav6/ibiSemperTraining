$(function() {
	//navbar dropdown submenu
	$('.dropdown-submenu > a').on('click', function(e) {
		var submenu = $(this);
		$('.dropdown-submenu .dropdown-menu').removeClass('show');
		submenu.next('.dropdown-menu').addClass('show');
		e.stopPropagation();
	});

	$('.dropdown-submenu').on('click', function(e) {
		var submenu = $(this);
		$('.dropdown-submenu .dropdown-menu').removeClass('show');
		submenu.find('.dropdown-menu').addClass('show');
		e.stopPropagation();
	});

	$('.dropdown').on('hidden.bs.dropdown', function() {
		// hide any open menus when parent closes
		$('.dropdown-menu.show').removeClass('show');
	});

	//Enable Bootstrap tooltips
	$('[data-toggle="tooltip"]').tooltip();

	//Enable Smooth Scroll - Ignore Bootstrap Tabs
	var scroll = new SmoothScroll('a[href*="#"]', {
		ignore: '[data-scroll-ignore], .page-link',
		speed: 1000
	});

	//Scroll to top button animation
	var offsetTop = $(window).height();

	$(window).scroll(function() {
		if ($('html').scrollTop() > offsetTop && $(document).width() > 700) {
			$('#scrollBtn').fadeIn();
		} else {
			$('#scrollBtn').fadeOut();
		}
	});

	$('#scrollBtn').on('click', function() {
		$('html').animate(
			{
				scrollTop: 0
			},
			500
		);
	});
});
