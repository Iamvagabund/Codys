$(document).ready(function(){
	function moveMenu(slf){
		var thisMenuHalf = slf.innerWidth()/2,
			wrap = slf.closest('.wrapper-menu'),
			wrapO = wrap.scrollLeft(),
			thisO = slf.offset().left,
			wWHalf = $(window).width()/2,
			needScroll = wrapO + thisO - wWHalf + thisMenuHalf;

		wrap.animate({"scrollLeft": needScroll}, 400);

	}

	$('.menu-a').on('click',function(event){
		event.preventDefault();
		var slf = $(this);

		moveMenu(slf);
	});
});
