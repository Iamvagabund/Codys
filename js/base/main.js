$(window).on('load', function(){
	ma.popCard.on('click', function(event){
		event.preventDefault();
		ma.btn = $(this);

		var thisDataPop = ma.btn.attr('data-pop-card');

		ma.popCardChange("popCardAndroid", thisDataPop);
		$('.popup-full2').addClass('active');
	});

	ma.arrR.on('click', function(){
		var nextBtn = ma.btn.closest('.project').next().find('.show_pop_card');
		ma.changeByArr(nextBtn);
	});

	ma.arrRmob.on('click', function(){
		var nextBtn = ma.btn.closest('.project').next().find('.show_pop_card');
		ma.changeByArr(nextBtn);
	});

	ma.arrL.on('click', function(){
		var prevBtn = ma.btn.closest('.project').prev().find('.show_pop_card');
		ma.changeByArr(prevBtn);
	});

	ma.arrLmob.on('click', function(){
		var prevBtn = ma.btn.closest('.project').prev().find('.show_pop_card');
		ma.changeByArr(prevBtn);
	});
});