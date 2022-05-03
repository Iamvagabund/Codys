$(function(){

	function changeMenu( obj, ind ){
		obj.addClass("active").siblings().removeClass("active");
		obj.closest(".page.active").find(".page_cont .contents").removeClass("active").eq(ind).addClass("active");
	}

	$(".menu-a").on("click", function(){
		var self = $(this),
			thisIndex = self.index();

		changeMenu(self, thisIndex);
	});


	function changeMenu2( obj, ind ){
		obj.closest(".main-page").find('.block-logo').removeClass("active");
		obj.closest(".main_page").removeClass("active");
		$('.b').trigger('click');
		$('.work .menu-a').eq(ind).trigger('click');
	}

	$(".all-go").on("click", function(){
		var self = $(this),
			thisIndex = self.index();

		changeMenu2(self, thisIndex);
	});


});