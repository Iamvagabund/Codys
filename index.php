<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Codys | Mobile app developers</title>
<link rel="icon" href="favicon.png" type="image/x-icon" />
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,900' rel='stylesheet' type='text/css' >
<link rel="stylesheet" href="css/jquery.materialripple.css">
</head>
<body>
<div class="main-page">
	<div class="popup-full">
		<div class="callback-div">
			<div class="top-callback">
				<div>Let's have a conversation</div>
				<a class="cancel" href=""><img src="img/cancel.png" alt=""></a>
				<a class="cancel-mob" href=""><img src="img/mobile/prev-slide-mob.png" alt=""></a>
			</div>
			<div class="bot-callback">
				<div class="right-callback">
					<p>Contacts sales</p>
					<div class="contacts-sales">
						Email:<br><br>
						<span>hello@mycodys.com</span>
					</div>
					<div class="contacts-sales">
						Phone:<br><br>
						USA:<br> <a href="tel:+15183349080"><span>+1 (518) 334-9080</span></a><br><br>
						Ukraine:<br> <a href="tel:+380502102687"><span>+380 (50) 210-2687</span></a>
					</div>
					<div class="contacts-sales">
						Location:<br><br>
						642 Harrison Street, San Francisco, CA, United States<br><br>
						North street, 6, Kyiv city, Ukraine
					</div>
				</div>
				<div class="left-callback">
					<p>Contact Us</p>
					<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" name="form" id="mailForm">
						<select class="inquiry" id="inquiry" name="inquiry">
							<option>What's your inquiry about?</option>
							<option>App development </option>
							<option>App cost calculation</option>
							<option>Get a free consultation</option>
							<option>Other </option>
						</select>
						<div class="line-form"></div>
						<input class="input-left" id="questions" type="text" name="questions" placeholder="Please tell us your questions">
						<div id='message_error' class='error'>Enter your message</div>
						<div class="line-form"></div>
						<div class="nameplus">
							<div class="form-img"><img src="img/form-name.png" alt=""></div>
							<input class="input-left2" id="name" type="text" name="name" placeholder="First name">
							<input id="lastname" type="text" name="lastname" placeholder="Last name">
						</div>
						<div class="form-phone">
							<div class="form-img"><img src="img/form-phone.png" alt=""></div>
							<input class="input-left" name="phone" id="phone" type="text" placeholder="Phone">
							<div class="line-form"></div>
						</div>
						<div class="form-phone">
							<div class="form-img"><img src="img/form-mail.png" alt=""></div>
							<input class="input-left" name="email" id="email" type="text" placeholder="Email">
							<div class="line-form"></div>
							<div id='email_error' class='error'>Enter your email address</div>
						</div>
						<div class="after-form">
							*By submiting, I agree to the processing of personal data. Cody's Company undertakes not to transfer this information<br>to 3rd parties.
						</div>
						<button class="sendButton" id='send_message' type="submit">
							Submit
						</button>
						<button class="cancel-but">cancel</button>
						<div id='mail_success' class='success'><img src="img/ty.png" alt=""></div>
						<div id='mail_fail' class='error'>Your message was not sent</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="left-part">
		<div class="logo-div">
		<div class="cancel-logo"></div>
			<div class="block-logo active">
				<img src="img/logo.png" alt="">
			</div>
			<div class="contact-button">
				<a class="ripple call-popup" href="">contact us</a>
			</div>
		</div>
		<nav>
		  <div class="nav_item b"><div class="text-menu">Our work </div></div>
		  <div class="nav_item p"><div class="text-menu">Services</div></div>
		  <!--<div class="nav_item r"><div class="text-menu">Solutions</div></div>-->
		  <div class="nav_item o"><div class="text-menu">Careers </div></div>
		  <div class="nav_item g"><div class="text-menu">About</div></div>
		</nav>
	<footer>
		<div class="socials-full">
			<a href="https://www.facebook.com/mycodys" target="_blank" class="facebook"></a>
			<a href="https://plus.google.com/+Mycodys" target="_blank" class="google_plus"></a>
			<a href="https://www.linkedin.com/company/codys" target="_blank" class="linkedin"></a>
			<a href="https://twitter.com/your_codys" target="_blank" class="twitter"></a>
		</div>
		<div class="footer_cont"> &copy 2016 Codys - Privacy Police</div>
	</footer>
	</div>
	<div class="pages">
		<div class="main_page active">
		<div class="menu-button"></div>
			<div class="main_con">
				<div class="main-text">
					<p>We are your personal guides to your</p>
					<p>own high-quality app</p>
				</div>
				<div class="main-href">
					<div class="android_go_all all-go">
						<div class="android_go href_go"></div>
						<div class="text-href_go">Android</div>
					</div>
					<div class="ios_go_all all-go">
						<div class="ios_go href_go"></div>
						<div class="text-href_go"> iPhone & iPad</div>
					</div>
					<div class="uxui_go_all all-go">
						<div class="uxui_go href_go"></div>
						<div class="text-href_go">UX/UI Design</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page work">
		<div class="popup-full2">
			<div class="card-div-all">
			<div class="leftArr arrslider"></div>
			<div class="rightArr arrslider"></div>
			<div class="leftArr-mob arrslider2"></div>
			<div class="rightArr-mob arrslider2"></div>
			<div class="card-div">
				<div class="top-card">
					<div class="logo-card"></div>
					<div class="pop_card_name"></div>
					<div class="pop_card_categ"></div>
					<a class="cancel" href=""><img src="img/cancel.png" alt=""></a>
					<a class="cancel-mob" href=""><img src="img/mobile/prev-slide-mob.png" alt=""></a>
				</div>
				<div class="img-card"></div>
				<div class="card-content clearfix">
					<div class="left-card">
						<div class="top-content-card">
							<div class="testimonials">
								<div class="testi-title">testimonials</div>
								<div class="testi-img"></div>
								<div class="testiimg-about"></div>
								<div class="testi-text"></div>
							</div>
						</div>
						<div class="other-card">
							<div class="testi-title">DESCRIPTION</div>
							<div class="testi-text description-text"></div>
						</div>
						<div class="other-card">
							<div class="testi-title">Goals</div>
							<div class="testi-text goals-text"></div>
						</div>
						<div class="other-card">
							<div class="testi-title">Solution</div>
							<div class="testi-text solution-text"></div>
							<div>
								<ul class="ulli">
									<li></li>
								</ul>
							</div>
							<div class="testi-text solution-text2"></div>
							<div>
								<ul class="ulli2">
									<li></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="right-card">
						<div class="category">
							<div class="testi-title">Category</div>
							<div class="categ-tag categorydiv">
								<div class="cat-tag category-tag">Travel</div>
							</div>
						</div>
						<div class="tags">
							<div class="testi-title">Tags</div>
							<div class="categ-tag categorytags">
								<div class="cat-tag tags-tags">IoT</div>
								<div class="cat-tag tags-tags">iOS</div>
								<div class="cat-tag tags-tags">Android</div>
								<div class="cat-tag tags-tags">UI/UX</div>
							</div>
						</div>
						<div class="tools">
							<div class="testi-title">Tools</div>
							<div class="categ-tag categorytools">
								<div class="cat-tag tools-tag">Java</div>
								<div class="cat-tag tools-tag">C#</div>
								<div class="cat-tag tools-tag">MySQL</div>
							</div>
						</div>
						<div class="href-iOS"><a class="hrefiOS" href="https://itunes.apple.com/ru/app/mcdonalds-ua/id590059316?mt=8" target="_blank"><img src="img/cards/iOS-href.png" alt=""></a></div>
						<div class="href-Android"><a class="hrefAndroid" href="https://play.google.com/store/apps/details?id=com.mcdonalds.ua" target="_blank"><img src="img/cards/android-href.png" alt=""></a></div>
					</div>
					<div class="bottom-close">
						<p>Back to: our work</p>
					</div>
					<div class="bottom-mob">
						<div class="prev-mob"><p>Previous project</p></div>
						<div class="next-mob"><p>Next project</p></div>
					</div>
				</div>
			</div>
			</div>
		</div>
			<div class="all-top">
				<div class="menu-button"></div>
				<div class="logo-mob"></div>
				<div class="article">Our work</div>
				<div class="sticky-anchor"></div>
				<div class="overflow-top-menu">
					<div class="wrapper-menu">
						<div class="top-menu">
							<a class="active menu-a" href="">Android development</a>
							<a class="menu-a" href="">iOS development</a>
							<a class="menu-a" href="">UX/UI Design</a>
							<a class="menu-a" href="">Web development</a>
						</div>
					</div>
				</div>
			</div>
			<div class="page_cont">
				<div data-pop-card-arr="popCardAndroid" class="android-w active contents pop_card_arr and-plus-ios">
					<div class="content">
						<div class="project1 project pr-android-w-1">
							<div class="picture-pr"></div>
							<div class="article-pr">McDonalds</div>
							<div class="text-pr">
								This app is the official app McDonald's Ukraine. With it, you can find out the prices at McDonald's, the latest promotions
							</div>
							<div class="text-more"><a data-pop-card="0" class="show_pop_card call-popup2" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-2">
							<div class="picture-pr"></div>
							<div class="article-pr">WhiYA</div>
							<div class="text-pr">
								An optimized Social App, WHiYA is the only location based app to profile local hot spots and connect people in the same area in real
							</div>
							<div class="text-more"><a data-pop-card="1" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project3 project pr-android-w-3">
							<div class="picture-pr"></div>
							<div class="article-pr">Eyewitness News</div>
							<div class="text-pr">
								Channel 3 Eyewitness News on wfsb.com is Connecticut's source for news and weather online. From Hartford to New Haven to the
							</div>
							<div class="text-more"><a data-pop-card="2" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project1 project pr-android-w-4">
							<div class="picture-pr"></div>
							<div class="article-pr">MobiKwik</div>
							<div class="text-pr">
								MobiKwik is the fastest app for various online payments. This app accepts all credit cards, debit cards and NetBanking. Recharge
							</div>
							<div class="text-more"><a data-pop-card="3" class="show_pop_card" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-5">
							<div class="picture-pr"></div>
							<div class="article-pr">Dental Boards</div>
							<div class="text-pr">
								Dental Boards Mastery was created by dental students and professors who understand the struggle and pressure of the
							</div>
							<div class="text-more"><a data-pop-card="4" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project3 project pr-android-w-6">
							<div class="picture-pr"></div>
							<div class="article-pr">Vkraina Travel</div>
							<div class="text-pr">
								Vkraina Travel 3G from Kyivstar will take you on a journey around Ukraine. You will find out how Ukrainian lands were depicted on
							</div>
							<div class="text-more"><a data-pop-card="5" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project1 project pr-android-w-7">
							<div class="picture-pr"></div>
							<div class="article-pr">Wide:Up</div>
							<div class="text-pr">
								WIDE:UP - a multifunctional environment for individuals and businesses, which covers all aspects of modern life, and meet
							</div>
							<div class="text-more"><a data-pop-card="6" class="show_pop_card" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-8">
							<div class="picture-pr"></div>
							<div class="article-pr">594 Taxi</div>
							<div class="text-pr">
								594 taxi is the best way to get a cab in a shortest period of time. All youneed is just to show your location to us and we will get the
							</div>
							<div class="text-more"><a data-pop-card="7" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="add-pr pr-android-w-9">
							<div class="picture-pr"></div>
							<div class="article-pr">Add your project</div>
							<div class="text-pr">
								This place was reserved for your project
							</div>
							<div class="contact-button">
								<a class="ripple call-popup" href="">contact us</a>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href=""><span>Services</span></a>
							</div>
						</div>
					</div>
				</div>
				<div data-pop-card-arr="popCardAndroid" class="ios-w contents pop_card_arr and-plus-ios">
					<div class="content">
						<div class="project2 project pr-android-w-5">
							<div class="picture-pr"></div>
							<div class="article-pr">Dental Boards</div>
							<div class="text-pr">
								Dental Boards Mastery was created by dental students and professors who understand the struggle and pressure of the
							</div>
							<div class="text-more"><a data-pop-card="4" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project3 project pr-android-w-3">
							<div class="picture-pr"></div>
							<div class="article-pr">Eyewitness News</div>
							<div class="text-pr">
								Channel 3 Eyewitness News on wfsb.com is Connecticut's source for news and weather online. From Hartford to New Haven to the
							</div>
							<div class="text-more"><a data-pop-card="2" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project1 project pr-android-w-4">
							<div class="picture-pr"></div>
							<div class="article-pr">MobiKwik</div>
							<div class="text-pr">
								MobiKwik is the fastest app for various online payments. This app accepts all credit cards, debit cards and NetBanking. Recharge
							</div>
							<div class="text-more"><a data-pop-card="3" class="show_pop_card" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project1 project pr-android-w-7">
							<div class="picture-pr"></div>
							<div class="article-pr">Wide:Up</div>
							<div class="text-pr">
								WIDE:UP - a multifunctional environment for individuals and businesses, which covers all aspects of modern life, and meet
							</div>
							<div class="text-more"><a data-pop-card="6" class="show_pop_card" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-2">
							<div class="picture-pr"></div>
							<div class="article-pr">WhiYA</div>
							<div class="text-pr">
								An optimized Social App, WHiYA is the only location based app to profile local hot spots and connect people in the same area in real
							</div>
							<div class="text-more"><a data-pop-card="1" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project3 project pr-android-w-6">
							<div class="picture-pr"></div>
							<div class="article-pr">Vkraina Travel</div>
							<div class="text-pr">
								Vkraina Travel 3G from Kyivstar will take you on a journey around Ukraine. You will find out how Ukrainian lands were depicted on
							</div>
							<div class="text-more"><a data-pop-card="5" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-8">
							<div class="picture-pr"></div>
							<div class="article-pr">594 Taxi</div>
							<div class="text-pr">
								594 taxi is the best way to get a cab in a shortest period of time. All youneed is just to show your location to us and we will get the
							</div>
							<div class="text-more"><a data-pop-card="7" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project1 project pr-android-w-1">
							<div class="picture-pr"></div>
							<div class="article-pr">McDonalds</div>
							<div class="text-pr">
								This app is the official app McDonald's Ukraine. With it, you can find out the prices at McDonald's, the latest promotions
							</div>
							<div class="text-more"><a data-pop-card="0" class="show_pop_card call-popup2" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="add-pr pr-android-w-9">
							<div class="picture-pr"></div>
							<div class="article-pr">Add your project</div>
							<div class="text-pr">
								This place was reserved for your project
							</div>
							<div class="contact-button">
								<a class="ripple call-popup" href="">contact us</a>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href=""><span>Services</span></a>
							</div>
						</div>
					</div>
				</div>
				<div data-pop-card-arr="popCardAndroid" class="web-w contents pop_card_arr and-plus-ios">
					<div class="content">
						<div class="project1 project pr-android-w-7">
							<div class="picture-pr"></div>
							<div class="article-pr">Wide:Up</div>
							<div class="text-pr">
								WIDE:UP - a multifunctional environment for individuals and businesses, which covers all aspects of modern life, and meet
							</div>
							<div class="text-more"><a data-pop-card="6" class="show_pop_card" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-2">
							<div class="picture-pr"></div>
							<div class="article-pr">WhiYA</div>
							<div class="text-pr">
								An optimized Social App, WHiYA is the only location based app to profile local hot spots and connect people in the same area in real
							</div>
							<div class="text-more"><a data-pop-card="1" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project3 project pr-android-w-6">
							<div class="picture-pr"></div>
							<div class="article-pr">Vkraina Travel</div>
							<div class="text-pr">
								Vkraina Travel 3G from Kyivstar will take you on a journey around Ukraine. You will find out how Ukrainian lands were depicted on
							</div>
							<div class="text-more"><a data-pop-card="5" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project3 project pr-android-w-3">
							<div class="picture-pr"></div>
							<div class="article-pr">Eyewitness News</div>
							<div class="text-pr">
								Channel 3 Eyewitness News on wfsb.com is Connecticut's source for news and weather online. From Hartford to New Haven to the
							</div>
							<div class="text-more"><a data-pop-card="2" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-5">
							<div class="picture-pr"></div>
							<div class="article-pr">Dental Boards</div>
							<div class="text-pr">
								Dental Boards Mastery was created by dental students and professors who understand the struggle and pressure of the
							</div>
							<div class="text-more"><a data-pop-card="4" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project1 project pr-android-w-1">
							<div class="picture-pr"></div>
							<div class="article-pr">McDonalds</div>
							<div class="text-pr">
								This app is the official app McDonald's Ukraine. With it, you can find out the prices at McDonald's, the latest promotions
							</div>
							<div class="text-more"><a data-pop-card="0" class="show_pop_card call-popup2" href="">Learn more <img src="img/arr-gr.png" alt="#"></a>
							</div>
						</div>
						<div class="project1 project pr-android-w-4">
							<div class="picture-pr"></div>
							<div class="article-pr">MobiKwik</div>
							<div class="text-pr">
								MobiKwik is the fastest app for various online payments. This app accepts all credit cards, debit cards and NetBanking. Recharge
							</div>
							<div class="text-more"><a data-pop-card="3" class="show_pop_card" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-8">
							<div class="picture-pr"></div>
							<div class="article-pr">594 Taxi</div>
							<div class="text-pr">
								594 taxi is the best way to get a cab in a shortest period of time. All youneed is just to show your location to us and we will get the
							</div>
							<div class="text-more"><a data-pop-card="7" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="add-pr pr-android-w-9">
							<div class="picture-pr"></div>
							<div class="article-pr">Add your project</div>
							<div class="text-pr">
								This place was reserved for your project
							</div>
							<div class="contact-button">
								<a class="ripple call-popup" href="">contact us</a>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href=""><span>Services</span></a>
							</div>
						</div>
					</div>
				</div>
				<div data-pop-card-arr="popCardAndroid" class="wearables-w contents pop_card_arr and-plus-ios">
					<div class="content">
						<div class="project1 project pr-android-w-4">
							<div class="picture-pr"></div>
							<div class="article-pr">MobiKwik</div>
							<div class="text-pr">
								MobiKwik is the fastest app for various online payments. This app accepts all credit cards, debit cards and NetBanking. Recharge
							</div>
							<div class="text-more"><a data-pop-card="3" class="show_pop_card" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="project2 project pr-android-w-8">
							<div class="picture-pr"></div>
							<div class="article-pr">594 Taxi</div>
							<div class="text-pr">
								594 taxi is the best way to get a cab in a shortest period of time. All youneed is just to show your location to us and we will get the
							</div>
							<div class="text-more"><a data-pop-card="7" class="show_pop_card" href="">Learn more <img src="img/arr-gr.png" alt="#"></a></div>
						</div>
						<div class="add-pr pr-android-w-9">
							<div class="picture-pr"></div>
							<div class="article-pr">Add your project</div>
							<div class="text-pr">
								This place was reserved for your project
							</div>
							<div class="contact-button">
								<a class="ripple call-popup" href="">contact us</a>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href=""><span>Services</span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="page services">
			<div class="all-top">
			<div class="menu-button"></div>
				<div class="logo-mob"></div>
				<div class="article">Services</div>
				<div class="overflow-top-menu">
					<div class="wrapper-menu">
						<div class="top-menu">
							<a class="active menu-a" href="">Android development</a>
							<a class="menu-a" href="">iOS development</a>
							<a class="menu-a" href="">Web development</a>
							<a class="menu-a" href="">Wearables</a>
							<a class="menu-a" href="">UX/UI Design</a>
						</div>
					</div>
				</div>
			</div>
				<div class="page_cont">
					<div class="android-s active contents">
						<div class="content content-mid">
							<div class="title-menu">Agile Android App Development</div>
							<div class="block-first clearfix">
								<p>
									For the last four years we've helped our numerous clients to craft high quality, perfectly designed and successful products on the Android platform, which was constantly evolving, extending, re-designing and adapting in different areas.
								</p>
								<p>
									We at Codys are a team of experienced Android developers, designers and product managers who will guide you from Zero to One of application development. Whether it is a brand new product that is just starting user and market research or an established app with millions of users that needs advanced care and treatment from an experienced Android developers.
								</p>
							</div>
							<div class="block-second">
								<img src="img/iOS.png" alt="">
							</div>
						</div>
							<div class="block-third">
								<img src="img/android-services.jpg" alt="">
							</div>
							<div class="block-width">
								<p>Looking for the best Android developers?</p>
								<div class="contact-button">
									<a class="ripple call-popup" href="">Talk to Us about Your Project</a>
								</div>
							</div>
							<div class="block-fourth">
								<div class="p-mid">Advanced expertise from Android App Development company</div>
								<p>
									Custom app development is not just about coding. It is a quality-driven and very efficient process that we evolved, together with cutting edge techniques from Extreme Programming and Scrum:
								</p>
								<ul>
									<li>Test Driven Development with Robolectric, Fest and more;</li>
									<li>Reactive and functional programming for good (RxAndroid, RetroLambda);</li>
									<li>Code Reviews combined with Pair Programming;</li>
									<li>Continuous Integration (Jenkins, Travis) with advanced Gradle scripts;</li>
									<li>Automated testing of numerous things instead of manual testing;</li>
									<li>Integrity of the whole system is a goal, not just its mobile part (integration testing, API automated testing with SoapUI and Helium);</li>
									<li>Weekly product increment Releases;</li>
									<li>Communication and Collaboration over documentation (HipChat/Slack, PivotalTracker with real time automated notifications from CI, Gitlab...);</li>
									<li>And much more...</li>
								</ul>
								<p>For the last two years we've also been busy with embedded Android development including custom Android Firmware, which requires an extremely deep level of understanding of the platform as well as software development principles.</p>
								<div class="p-mid">Material Design and the UX Focused Process</div>
								<p>
									The best from two major mobile platforms, iOS and Android, converges in the beautiful and purposeful design of our apps for Android. The design process starts from understanding a user's needs, business goals, and then moves through wireframing and interaction design and culminates in pixel-perfect graphic designs.
								</p>
							</div>
							<div class="android-pic">
								<img src="img/android-pic.png" alt="">
							</div>
							<div class="white">
								<p>We love how Android applications look in Material Design, being clean and modern</p>
								<p>It resonates with our core values and focuses only on what's essential and important</p>
							</div>
							<div class="block-width">
								<p>Working on an app or tweaking the Android core?</p>
								<div class="contact-button">
									<a class="ripple call-popup" href="">Talk to Us about Your Challenges</a>
								</div>
							</div>
						<div class="content content-mid">
							<div class="approach">
								<p>Our Approach</p>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_discover.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Discovery Phase</div>
										<div class="about-appr">
												First we define an initial concept of your app that meets your business goals and satisfies users' needs. We dig deep into your business objectives and work together to bring the core problem to the surface. Once the problem is identified we conduct a brainstorming session to solve it. We think big and move fast, we bring cutting-edge mobile and wearable design experience to your project.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_ux.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">UX and Visual Design Phase</div>
										<div class="about-appr">
												When we have defined an app concept and understood its target audiences and main use cases, it is time to go to the design stage. Here we work on interactive user interface (UI) wireframes which allow us to examine app usability and interactions and through several iterations achieve the best user experience (UX). Once we are happy with the UX and UI we create a beautiful, unique visual design for your app.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_agile.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Development and Release Phase</div>
										<div class="about-appr">
												In development we stick to the Agile approach which allows you to get a working product very early and be able to iteratively improve it. We believe in people over processes, deliverables over extensive documentations, and close collaboration to create an excellent product. As soon as you're satisfied with the current version of the app we launch it in mobile or wearable app stores.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_support.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Continuous Improvement and Support</div>
										<div class="about-appr">
												We are ready to work as your partner and consultant to guide you through the whole process of app development, starting from ideation, UX, design, engineering, and continuing through to publication in the market and further support. Once the app is launched we are ready to continue to work with you very closely to ensure its continued success and user satisfaction.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href=""><span>Careers</span></a>
							</div>
						</div>
					</div>
					<div class="ios-s contents">
						<div class="content content-mid">
							<div class="title-menu">Professional iPhone App Developers</div>
							<div class="block-first clearfix">
								<p>
									Our team of experienced iPhone app developers and designers works closely with a client at all stages of the project, starting from ideation and idea validation, and encompassing UX/UI design, engineering, testing and publication in the AppStore.
								</p>
								<p>
									Codys has years of experience in building custom iPhone applications and has it down to a science. We are a strong team of professional developers and designers, offering full-cycle app development services.
								</p>
							</div>
							<div class="block-second">
								<img src="img/iOS.png" alt="">
							</div>
							<div class="block-third">
								<p>
									Build - Measure - Learn - that's how we develop iPhone applications. It is not just about coding, it is a solid process of analysing basic needs, creating a clear User Experience (UX) and delightful graphical design, making it perfect in code and then improving it based on feedback from users.
								</p>
							</div>
						</div>
						<div class="block-fourth-ios">
							<h3>Expert iPhone App Developers</h3>
							<p>Swift is the new rule for iPhone app developers and we've mastered it.</p>
							<img src="img/ios_screen1.jpg" alt="">
							<p>At the same time, Objective-C is there for a lot of different things along with plain old C in cases where performance is extremely critical.</p>
							<img src="img/ios_screen2.jpg" alt="">
							<p>Engineering for us is also about being creative and efficient:</p>
							<ul>
								<li>Quality is the responsibility of the entire team including developers (TDD is awesome here);</li>
								<li>Continuous integration (CI) helps to make sure all checks are executed and nothing is missed;</li>
								<li>Periodic (nightly and weekly) build delivery to product owners and customers keeps expectations in sync.</li>
							</ul>
							<p>If you know these keywords, you know what we know: CocoaPods, Reactive Cocoa, MVVM, CoreData, Alamofire/AFNetworking, RestKit, XCTest, FAstlane and much more.</p>
							<p>Agile and Scrum are not just buzzwords for us. They work in custom software development and help our teams release regularly, keep expectations in sync and quality high and stable. Have doubts? Talk to us.</p>
						</div>
							<div class="block-width">
								<p>
									Working on the best iPhone app experience in industry?
								</p>
								<div class="contact-button">
									<a class="ripple call-popup" href="">Talk to Us about Your challenges</a>
								</div>
							</div>
						<div class="content content-mid">
							<div class="approach">
								<p>Our Approach</p>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_discover.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Discovery Phase</div>
										<div class="about-appr">
												First we define an initial concept of your app that meets your business goals and satisfies users' needs. We dig deep into your business objectives and work together to bring the core problem to the surface. Once the problem is identified we conduct a brainstorming session to solve it. We think big and move fast, we bring cutting-edge mobile and wearable design experience to your project.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_ux.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">UX and Visual Design Phase</div>
										<div class="about-appr">
												When we have defined an app concept and understood its target audiences and main use cases, it is time to go to the design stage. Here we work on interactive user interface (UI) wireframes which allow us to examine app usability and interactions and through several iterations achieve the best user experience (UX). Once we are happy with the UX and UI we create a beautiful, unique visual design for your app.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_agile.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Development and Release Phase</div>
										<div class="about-appr">
												In development we stick to the Agile approach which allows you to get a working product very early and be able to iteratively improve it. We believe in people over processes, deliverables over extensive documentations, and close collaboration to create an excellent product. As soon as you're satisfied with the current version of the app we launch it in mobile or wearable app stores.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_support.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Continuous Improvement and Support</div>
										<div class="about-appr">
												We are ready to work as your partner and consultant to guide you through the whole process of app development, starting from ideation, UX, design, engineering, and continuing through to publication in the market and further support. Once the app is launched we are ready to continue to work with you very closely to ensure its continued success and user satisfaction.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer">
						</div>
						<div class="bottom-button">
							<a class="button-next" href="">Careers</a>
						</div>
					</div>
					<div class="web-s contents">
						<div class="web-pic"><img src="img/web.png" alt=""></div>
						<div class="text-web-s">
							Web app - designed to fully transfer the functional mobile application on your web site. The introduction of mobile application gives you the confidence that your customer will use your services as comfortably as possible, just being on your web site.
						</div>
						<div class="block-width">
							<p>Looking for the best Web developers?</p>
							<div class="contact-button">
								<a class="ripple call-popup" href="">Talk to Us about Your Project</a>
							</div>
						</div>
						<div class="content content-mid">
							<div class="approach">
								<p>Our Approach</p>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_discover.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Discovery Phase</div>
										<div class="about-appr">
												First we define an initial concept of your app that meets your business goals and satisfies users' needs. We dig deep into your business objectives and work together to bring the core problem to the surface. Once the problem is identified we conduct a brainstorming session to solve it. We think big and move fast, we bring cutting-edge mobile and wearable design experience to your project.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_ux.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">UX and Visual Design Phase</div>
										<div class="about-appr">
												When we have defined an app concept and understood its target audiences and main use cases, it is time to go to the design stage. Here we work on interactive user interface (UI) wireframes which allow us to examine app usability and interactions and through several iterations achieve the best user experience (UX). Once we are happy with the UX and UI we create a beautiful, unique visual design for your app.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_agile.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Development and Release Phase</div>
										<div class="about-appr">
												In development we stick to the Agile approach which allows you to get a working product very early and be able to iteratively improve it. We believe in people over processes, deliverables over extensive documentations, and close collaboration to create an excellent product. As soon as you're satisfied with the current version of the app we launch it in mobile or wearable app stores.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_support.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Continuous Improvement and Support</div>
										<div class="about-appr">
												We are ready to work as your partner and consultant to guide you through the whole process of app development, starting from ideation, UX, design, engineering, and continuing through to publication in the market and further support. Once the app is launched we are ready to continue to work with you very closely to ensure its continued success and user satisfaction.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href=""><span>Careers</span></a>
							</div>
						</div>
					</div>
					<div class="wearables-s contents">
						<div class="all-wear-uxui content-mid clearfix">
							<div class="left-img"><img src="img/wearables-image.png" alt=""></div>
							<div class="wearables-text">
								<p class="p-nt">Wearables</p>
								<p>
									The true value of wearables lies not in the hardware, but more in the software that is both in and around it, and that processes all the data. At the heart of most such solutions today is a smartphone, which plays the role of a hub for many different devices. Each device should have its own application with a unique interface and data analysis and data visualization capabilities.
								</p>
								<p>
									We have already developed a number of applications for Apple Watch, Pebble and Android Wear as well as gained experience in integrating hardware components into large software products.
								</p>
								<p>
									Many tiny devices often come without any tangible interface and thus require different approaches to software design, aimed at providing the best possible way of interacting with users. Our expertise includes designing user experiences (UX) and user interfaces (UI) for everything from desktop all the way down to mobile and wearable sizes and use cases. We work not only with visual perception, but also with verbal, tactile and other senses.
								</p>
							</div>
							<div class="content-hid clearfix">
								<p>
									Whether you have a market-ready device or a custom-built wearable prototype with TinyCircuits, we are capable of building full-stack software solutions for any of those.
								</p>
								<p>
									We at Codys always stay ahead of the times and explore new tech opportunities in order to better service our clients. That is why our team was among the first Apple Watch app developers, and one of the very first Pebble developers. Today we create applications for most known OS and smartwatches on the market: Apple Watch, Android Wear, and Pebble. We'll help you to ideate, design, develop and launch your application for a smartwatch or other wearable device.
								</p>
								<p>
									We have proven experience in developing apps for wearables. We have developed several applications for Pebble as internal projects. For example, My Calendar is a very simple application for Pebble smartwatch that shows the three nearest events from your Google calendar. It shows upcoming events, a digital clock, the current date, battery charge and bluetooth ñonnection. It doesn't require a companion app. My Calendar is one of the most popular calendar apps for Pebble smartwatch on the market.
								</p>
								<p>
									Codys is proud to be among the early Apple Watch app developers. We released the Apple Watch version of our Waterbalance application timed with the smartwatch launch. We wanted the first buyers of the watch to have the opportunity to use the Waterbalance app from day one. The Waterbalance app is already used by millions of people for calculating their personal daily water needs. We have created a beautiful app for Apple Watch as a great addition to the iPhone application. It allows users to see their current water balance at a glance and to add drinks with just one tap. With the Waterbalance app for smartwatch, users are able to interact quickly and simply with their favorite app.
								</p>
								<p>
									App development for smartwatches and other wearables creates tremendous opportunities for businesses, and we at Codys are always ready to help our clients to make the most of the new industry.
								</p>
							</div>
							<div class="moremore"><a class="more">Read more</a></div>
						</div>
						<div class="content content-mid">
							<div class="approach">
								<p>Our Approach</p>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_discover.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Discovery Phase</div>
										<div class="about-appr">
												First we define an initial concept of your app that meets your business goals and satisfies users' needs. We dig deep into your business objectives and work together to bring the core problem to the surface. Once the problem is identified we conduct a brainstorming session to solve it. We think big and move fast, we bring cutting-edge mobile and wearable design experience to your project.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_ux.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">UX and Visual Design Phase</div>
										<div class="about-appr">
												When we have defined an app concept and understood its target audiences and main use cases, it is time to go to the design stage. Here we work on interactive user interface (UI) wireframes which allow us to examine app usability and interactions and through several iterations achieve the best user experience (UX). Once we are happy with the UX and UI we create a beautiful, unique visual design for your app.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_agile.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Development and Release Phase</div>
										<div class="about-appr">
												In development we stick to the Agile approach which allows you to get a working product very early and be able to iteratively improve it. We believe in people over processes, deliverables over extensive documentations, and close collaboration to create an excellent product. As soon as you're satisfied with the current version of the app we launch it in mobile or wearable app stores.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_support.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Continuous Improvement and Support</div>
										<div class="about-appr">
												We are ready to work as your partner and consultant to guide you through the whole process of app development, starting from ideation, UX, design, engineering, and continuing through to publication in the market and further support. Once the app is launched we are ready to continue to work with you very closely to ensure its continued success and user satisfaction.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href="">Careers</a>
							</div>
						</div>
					</div>
					<div class="uxui-s contents">
						<div class="all-wear-uxui content-mid clearfix">
							<div class="left-img"><img src="img/ux-visual-image.png" alt=""></div>
							<div class="wearables-text">
								<p class="p-nt">UX/UI App Designers</p>
								<p>
									Great user experience design is the soul of a great app and it keeps people coming back. At Codys, UX and graphic design are something we lay a major emphasis upon. We believe that the best applications are handy and simple to use, yet functional and stylish.
								</p>
								<p>
									UX design can be the reason for a user's delight or dismay. That's why we have a team of superior mobile app designers that are seriously picky about how actual users will interact with an app and what will hook them. We are not the people who will just graft your website onto a mobile app, because we know that users feel the difference. When your customers enjoy all touch points across your mobile app, you'll gain competitive advantages by diminishing customer outflow, expanding conversion and escalating loyalty and advocacy.
								</p>
							</div>
							<div class="content-hid clearfix">
								<p>
									Great design often brings out the best in the app programmers, too. We have always believed that there should be close-knit cooperation between the app designers and development teams to create the application you dream about. Alongside the design and development, we have a team of managers who are responsible for facilitating communication to make the design process absolutely efficient and smooth. We're committed to engaging with our clients through every single step of the design and development, and at Codys, we understand that the process doesn't end when your app is released. We always offer our clients professional assistance after the release in order to maintain profitability.
								</p>
								<p>
									Our app designer start with the client's needs. Clients' goals vary, and we're committed to developing a truly customized experience, resulting in a streamlined application that works the way you need it to. We learn about your company and what makes your business unique. We also keep in mind your goals and your target audience. And then we design and develop an app that speaks directly to your customers.
								</p>
								<p>
									Our design process usually includes: market research, analysis of user behavior and needs, requirements engineering, user interaction, visual design, prototyping, and usability testing.
								</p>
								<p>
									At Codys, our app designers and developers will take care about the entire process. From rough ideation to polished application release, Codys is here for you. Contact us anytime to learn more about how we can help.
								</p>
							</div>
							<div class="moremore"><a class="more">Read more</a></div>
						</div>
						<div class="content content-mid">
							<div class="approach">
								<p>Our Approach</p>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_discover.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Discovery Phase</div>
										<div class="about-appr">
												First we define an initial concept of your app that meets your business goals and satisfies users' needs. We dig deep into your business objectives and work together to bring the core problem to the surface. Once the problem is identified we conduct a brainstorming session to solve it. We think big and move fast, we bring cutting-edge mobile and wearable design experience to your project.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_ux.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">UX and Visual Design Phase</div>
										<div class="about-appr">
												When we have defined an app concept and understood its target audiences and main use cases, it is time to go to the design stage. Here we work on interactive user interface (UI) wireframes which allow us to examine app usability and interactions and through several iterations achieve the best user experience (UX). Once we are happy with the UX and UI we create a beautiful, unique visual design for your app.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_agile.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Development and Release Phase</div>
										<div class="about-appr">
												In development we stick to the Agile approach which allows you to get a working product very early and be able to iteratively improve it. We believe in people over processes, deliverables over extensive documentations, and close collaboration to create an excellent product. As soon as you're satisfied with the current version of the app we launch it in mobile or wearable app stores.
										</div>
									</div>
								</div>
								<div class="appr-block">
									<div class="img-bl d-inline"><img src="img/apprch_support.png" alt=""></div>
									<div class="text-appr d-inline">
										<div class="title-appr">Continuous Improvement and Support</div>
										<div class="about-appr">
												We are ready to work as your partner and consultant to guide you through the whole process of app development, starting from ideation, UX, design, engineering, and continuing through to publication in the market and further support. Once the app is launched we are ready to continue to work with you very closely to ensure its continued success and user satisfaction.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer">
							<div class="bottom-button">
								<a class="button-next" href="">Careers</a>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="page careers">
			<div class="careers2">
			<div class="menu-button"></div>
			<div class="article-car">Vacancies</div>
			<div class="logo-mob"></div>
			<div class="img-vac">
				<div class="vac-and d-inline">
					<img src="img/ios-vac.png" alt="">
					<p>iOS Engineer</p>
				</div>
				<div class="vac-ios d-inline">
					<img src="img/android-vac.png" alt="">
					<p>Android Engineer</p>
				</div>
			</div>
			<div class="vac-cw">
				<a href="mailto:@gmail.com">
					<img src="img/cv-logo.png" alt="">
					<p>Send us your CV</p>
				</a>
			</div>
			<div class="our-perks">Our Perks</div>
			<div class="img-vac2">
				<div class="perk1 perk d-inline">
					<img src="img/robot.png" alt="">
					<p class="perk-title">Professional Growth</p>
					<p class="perk-text">
						No limits: only goals you want to reach, only a kind of a specialist you want to be. We support you in these aspirations.
					</p>
				</div>
				<div class="perk2 perk d-inline">
					<img src="img/remote.png" alt="">
					<p class="perk-title">Remote work</p>
					<p class="perk-text">
						No matter where you are right now: at home, near the ocean or somewhere else. We appreciate the quality of your job not the hours spent in the office.
					</p>
				</div>
				<div class="perk3 perk d-inline">
					<img src="img/office.png" alt="">
					<p class="perk-title">Nice Office</p>
					<p class="perk-text">
						Space. Comfort. View. Light. Gadgets... Continue? ;)
					</p>
				</div>
			</div>
			<div class="footer">
				<div class="bottom-button">
					<a class="button-next" href=""><span>About</span></a>
				</div>
			</div>
			</div>
		</div>
		<div class="page about">
			<div class="menu-button"></div>
			<div class="article-about">App Development and Design Company</div>
			<div class="about-mid">specializing in software solutions for mobile, wearable devices</div>
			<div class="about-years"><img src="img/about-years2.png" alt=""></div>
			<div class="about-mid about-mid2">
				Our team of mobile app deveopers and designers focuses on<br>
				making apps easy to use and blazing fast,<br>
				whether they are designed for heavy video processing or simple utility tasks.<br>
			</div>
			<div class="article-about">UX/UI Designers</div>
			<ul>
				<li>We start with the basics - user needs and business goals.</li>
				<li>Ideas are validated through field user research.</li>
				<li>Interactive prototypes are done without a line of code.</li>
				<li>Usability is validated via User Tests performed by people who use apps and not by those who code or pay.</li>
				<li>We create Graphic Design that does not suck.</li>
			</ul>
			<div class="article-about">Expert Mobile App Developers</div>
			<ul>
				<li>Quality-driven engineering practices are here to avoid problems in user hands:<br>
					TDD, Code Reviews, Continuous Integration (CI) and more.</li>
				<li>We deliver weekly a working version of the product increment.</li>
				<li>A regular planning and review process is in place to ensure our customers get the product on time.</li>
				<li>Direct communication with app developers and designers improves the efficiency of the process.</li>
				<li>
					Agile is about common sense, frequent delivery and tight collaboration.<br>
					We've used it for years and constantly improve our practices all the time.
				</li>
			</ul>
			<div class="contact-button-more">
				<a class="ripple" target="_blank" href="/More_about_us.pdf">More about us</a>
			</div>
			<div class="article-about">Our Team</div>
			<div class="team-block">
				<div class="team">
					<img src="img/team/Alexey Dubinsky.png" alt="">
					<div class="name-team">Alexey Dubinsky</div>
					<div class="function">Web Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Alexsandr Ivanchenko.png" alt="">
					<div class="name-team">Alexsandr Ivanchenko</div>
					<div class="function">CFO & Founder</div>
				</div>
				<div class="team">
					<img src="img/team/Andrey Bratkovsky.png" alt="">
					<div class="name-team">Andrey Bratkovsky</div>
					<div class="function">Team Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Anya Shkavro.png" alt="">
					<div class="name-team">Anya Shkavro</div>
					<div class="function">Project Manager</div>
				</div>
				<div class="team">
					<img src="img/team/Bogdan Aza.png" alt="">
					<div class="name-team">Bogdan Aza</div>
					<div class="function">QA</div>
				</div>
				<div class="team">
					<img src="img/team/Bogdan Maximenko.png" alt="">
					<div class="name-team">Bogdan Maximenko</div>
					<div class="function">QA</div>
				</div>
				<div class="team">
					<img src="img/team/Bogdan Stadnik.png" alt="">
					<div class="name-team">Bogdan Stadnik</div>
					<div class="function">Lead Android Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Dmitry Dmitriev.png" alt="">
					<div class="name-team">Dmitry Dmitriev</div>
					<div class="function">iOS Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Dmitry Romanchenko.png" alt="">
					<div class="name-team">Dmitry Romanchenko</div>
					<div class="function">Lead iOS Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Egor Ryzhuk.png" alt="">
					<div class="name-team">Egor Ryzhuk</div>
					<div class="function">Android Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Ievgen Diundin.png" alt="">
					<div class="name-team">Ievgen Diundin</div>
					<div class="function">Experience Designer</div>
				</div>
				<div class="team">
					<img src="img/team/Igor Baliberdin.png" alt="">
					<div class="name-team">Igor Baliberdin</div>
					<div class="function">Graphic Designer</div>
				</div>
				<div class="team">
					<img src="img/team/Igor Rudenko.png" alt="">
					<div class="name-team">Igor Rudenko</div>
					<div class="function">Senior Java Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Indy Singh.png" alt="">
					<div class="name-team">Indy Singh</div>
					<div class="function">CEO</div>
				</div>
				<div class="team">
					<img src="img/team/Konstantin Kozachok.png" alt="">
					<div class="name-team">Konstantin Kozachok</div>
					<div class="function">Product Director & Founder</div>
				</div>
				<div class="team">
					<img src="img/team/Kyle Kattrein.png" alt="">
					<div class="name-team">Kyle Kattrein</div>
					<div class="function">CTO</div>
				</div>
				<div class="team">
					<img src="img/team/Michael Petriv.png" alt="">
					<div class="name-team">Michael Petriv</div>
					<div class="function">iOS Developer</div>
				</div>
				<div class="team">
					<img src="img/team/Tanya Ivanchenko.png" alt="">
					<div class="name-team">Tanya Ivanchenko</div>
					<div class="function">Finance Manager</div>
				</div>
				<div class="team">
					<img src="img/team/Yuriy Vinnik.png" alt="">
					<div class="name-team">Yuriy Vynnyk</div>
					<div class="function">Android Developer</div>
				</div>
			</div>
			<div class="article-about">Join Us</div>
			<div class="socials-mob">
				<a href="https://www.facebook.com/mycodys" class="facebook-mob" target="_blank"></a>
				<a href="https://plus.google.com/+Mycodys" class="google_plus-mob" target="_blank"></a>
				<a href="https://www.linkedin.com/company/codys" class="linkedin-mob" target="_blank"></a>
				<a href="https://twitter.com/your_codys" class="twitter-mob" target="_blank"></a>
			</div>
		</div>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/class/main.js"></script>
<script type="text/javascript" src="js/base/main.js"></script>
<script type="text/javascript" src="js/base/popup_arr.js"></script>
<script type="text/javascript" src="js/pages.js"></script>
<script type="text/javascript" src="js/fixed-menu.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/next.js"></script>
<script type="text/javascript" src="js/popup.js"></script>
<script src="js/jquery.materialripple.js"></script>
<script type="text/javascript" src="js/more.js"></script>
<script type="text/javascript" src="js/send-email.js"></script>
<script type="text/javascript" src="js/menu-mob.js"></script>
<script type="text/javascript" src="js/menu-scrolling.js"></script>
<script>
	$(function(){
  $('.ripple').materialripple();
});
</script>
<script language="JavaScript1.2">
var ns6=document.getElementById&&!document.all?1:0
var head="display:''"
var folder=''
function expandit(curobj){
folder=ns6?curobj.nextSibling.nextSibling.style:document.all[curobj.sourceIndex+1].style
if (folder.display=="none")
folder.display=""
else
folder.display="none"
}
</script>
<script>
	$.fn.clicktoggle = function(a, b) {
    return this.each(function() {
        var clicked = false;
        $(this).click(function(e) {
            e.preventDefault();
            if (clicked) {
                clicked = false;
                return b.apply(this, arguments);
            }
            clicked = true;
            return a.apply(this, arguments);
        });
    });
};
</script>
</body>
</html>
