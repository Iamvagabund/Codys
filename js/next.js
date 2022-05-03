$(function(){
	$(".button-next").on("click", function(event){
		event.preventDefault();
		$('.nav_item.active').next().trigger('click');
	});
});