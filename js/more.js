$(function(){
	$('.more').clicktoggle(function(){
		$(this).parent().prev().fadeIn(700);
		$(this).text('Hide');
	}, function(){
		$(this).parent().prev().fadeOut(700);
		$(this).text('Read More');
	});
});
