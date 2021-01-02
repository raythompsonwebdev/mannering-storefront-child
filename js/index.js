// Hide/show toggle button on scroll
jQuery(document).ready(function ($) {
	var position, direction, previous

	$(window).scroll(function () {
		if ($(this).scrollTop() >= position) {
			direction = 'down'
			if (direction !== previous) {
				$('.menu-toggle').addClass('hide')
				previous = direction
			}
		} else {
			direction = 'up'
			if (direction !== previous) {
				$('.menu-toggle').removeClass('hide')
				previous = direction
			}
		}
		position = $(this).scrollTop()
	})

	$('.menu-toggle').on('click', function (event) {
		event.preventDefault()

		// create menu variables
		var slideoutMenu = $('	nav#site-navigation ')
		var slideoutMenuWidth = $('	nav#site-navigation').width()

		// toggle open class
		slideoutMenu.toggleClass('open')

		// slide menu
		if (slideoutMenu.hasClass('open')) {
			slideoutMenu.animate({
				left: '0px',
			})
		} else {
			slideoutMenu.animate(
				{
					left: -slideoutMenuWidth,
				},
				500
			)
		}
	})
})
