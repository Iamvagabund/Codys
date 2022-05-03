$(function(){
	$('.menu-button').on('click', function (event) {
		$('.left-part').fadeIn(400).addClass('active');
	});

	$('.cancel-logo').on('click', function (event) {
		$('.left-part').removeClass('active').css("display", 'none');
	});

	$(document).mouseup(function (e) {
		$(function() {
			if($(window).width()<641) {
				$('.block-logo').on('click', function (event) {
					$('.left-part').removeClass('active').css("display", 'none');
				});

				$('.nav_item').on('click', function (event) {
					$('.left-part').removeClass('active').css("display", 'none');
				});

				$('.call-popup').on('click', function (event) {
					$('.left-part').removeClass('active').css("display", 'none');
				});
			}
		});
	});

});