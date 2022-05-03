$(function(){
	$('.call-popup').on('click', function (event) {

		event.preventDefault();
		$('.popup-full').addClass('active');
	});
	$('.popup-full .cancel').on('click', function (event) {
		event.preventDefault();
		$('.popup-full').removeClass('active');
	});
	$('.popup-full .cancel-but').on('click', function (event) {
	event.preventDefault();
	$('.popup-full').removeClass('active');
	});
	$('.popup-full .cancel-mob').on('click', function (event) {
		event.preventDefault();
		$('.popup-full').removeClass('active');
	});
});
$(function(){
	$('.call-popup2').on('click', function (event) {
		event.preventDefault();
		$('.popup-full2').addClass('active');
	});
	$('.popup-full2 .cancel').on('click', function (event) {
		event.preventDefault();
		$('.popup-full2').removeClass('active');
	});
	$('.popup-full2 .bottom-close').on('click', function (event) {
		event.preventDefault();
		$('.popup-full2').removeClass('active');
	});
	$('.popup-full2 .cancel-mob').on('click', function (event) {
		event.preventDefault();
		$('.popup-full2').removeClass('active');
	});
	$('.nav_item').on('click', function (event) {
		event.preventDefault();
		$('.popup-full2').removeClass('active');
	});
	$('.call-popup').on('click', function (event) {
		event.preventDefault();
		$('.popup-full2').removeClass('active');
	});
	$('.block-logo').on('click', function (event) {
		event.preventDefault();
		$('.popup-full2').removeClass('active');
	});

});
$(function(){
	$('#mail_success').on('click', function (event) {
		$('.popup-full').css("display", 'none');
	});
});