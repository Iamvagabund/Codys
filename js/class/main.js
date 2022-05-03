function Main(){
	this.popCard = $('.show_pop_card');
	this.popCardName = $('.pop_card_name');
	this.popCardCateg = $('.pop_card_categ');
	this.imgcard = $('.img-card');
	this.imgcardsmall = $('.logo-card');
	this.topcard = $('.top-card');
	this.bottommob = $('.bottom-mob');
	this.testiimg = $('.testi-img');
	this.testiimgabout = $('.testiimg-about');
	this.testitext = $('.testi-text');
	this.descriptiontext = $('.description-text');
	this.goalstext = $('.goals-text');
	this.solutiontext = $('.solution-text');
	this.hrefiOS = $('.hrefiOS');
	this.hrefAndroid = $('.hrefAndroid');
	this.arrR = $('.rightArr');
	this.arrL = $('.leftArr');
	this.arrRmob = $('.rightArr-mob');
	this.arrLmob = $('.leftArr-mob');


	this.popCardChange = function(arrCard, ind){
		var arr = ma[arrCard][ind];

		ma.popCardName.text(arr.name);
		ma.popCardCateg.text(arr.title);
		ma.imgcardsmall.css("background-image", "url(img/" + arr.smallImg + ")");
		ma.imgcard.css("background-image", "url(img/" + arr.bigImg + ")");
		ma.testiimg.css("background-image", "url(img/" + arr.testiimg + ")");
		ma.topcard.css("background-color", arr.topcard);
		ma.bottommob.css("background-color", arr.topcard);

		ma.testiimgabout.text(arr.testiimgabout);
		ma.testitext.text(arr.testitext);
		ma.descriptiontext.text(arr.descriptiontext);
		ma.goalstext.text(arr.goalstext);
		ma.solutiontext.text(arr.solutiontext);
		ma.hrefiOS.attr('href', arr.urlhrefiOS);
		ma.hrefAndroid.attr('href', arr.urlhrefAndroid);
		$('.card-div').scrollTop(0);
		$('.solution-text2').html('');
		$('.ulli').html('');
		$('.ulli2').html('');
		$('.categorydiv').html('');
		$('.categorytags').html('');
		$('.categorytools').html('');
		for(var n=0; n < arr.solutiontext2.length; n++) {
			$('.solution-text2').append(arr.solutiontext2[n]);
		}
		for(var b=0; b < arr.ulli.length; b++) {
			$('.ulli').append('<li>' + arr.ulli[b] + '</li>');
		}
		for(var k=0; k < arr.ulli2.length; k++) {
			$('.ulli2').append('<li>' + arr.ulli2[k] + '</li>');
		}
		for(var t=0; t < arr.categorydiv.length; t++) {
			$('.categorydiv').append('<div class="category-tag">' + arr.categorydiv[t] + '</div>');
		}
		for(var q=0; q < arr.categorytags.length; q++) {
			$('.categorytags').append('<div class="category-tag">' + arr.categorytags[q] + '</div>');
		}
		for(var i=0; i < arr.categorytools.length; i++) {
			$('.categorytools').append('<div class="category-tag">' + arr.categorytools[i] + '</div>');
		}
	};

	this.changeByArr = function(btn){
		if (btn.length !== 0) {
			var curCard = btn.data('pop-card');

			ma.popCardChange("popCardAndroid", curCard);
			ma.btn = btn;
		}
	};
};

var ma = new Main();
window.ma = ma;