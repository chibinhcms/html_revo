/* Add Custom Code Jquery
 ========================================================*/
$(document).ready(function(){
	// Messenger posmotion
	$( "#close-posmotion-header" ).click(function() {
		$('.promotion-top').toggleClass('hidden-promotion');
		$('body').toggleClass('hidden-promotion-body');

		if($(".promotion-top").hasClass("hidden-promotion")){
			$.cookie("open", 0);
			
		} else{
			$.cookie("open", 1);
		}

	});
	
	if($.cookie("open") == 0){
		$('.promotion-top').addClass('hidden-promotion');
		$('body').addClass('hidden-promotion-body');
	}

	// Messenger Top Link
	$('.list-msg').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		dots: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 30,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});


	$('.horizontal').on('mouseenter', function() {
	 	$(".select_category select").blur();
	});

	// Messenger Top Link
	$('.cate-content-home5').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		dots: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 30,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},
			768:{
				items:3
			},
			1200:{
				items:4
			}
		}
	});
	// Slider Clients Say
	$('.slider-clients-say').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 0,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});

	// Slider Clients Say
	$('.inner-clientsay').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 0,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});

	// $('.top-brand').owlCarousel2({
	// 	pagination: false,
	// 	center: false,
	// 	nav: false,
	// 	loop: true,
	// 	slideBy: 1,
	// 	autoplay: true,
	// 	margin: 0,
	// 	autoplayTimeout: 4500,
	// 	autoplayHoverPause: true,
	// 	autoplaySpeed: 1200,
	// 	startPosition: 0, 
	// 	responsive:{
	// 		0:{
	// 			items:6
	// 		},
	// 		480:{
	// 			items:2
	// 		},
	// 		768:{
	// 			items:3
	// 		},
	// 		1200:{
	// 			items:4
	// 		}
	// 	}
	// });

	$( ".header_search .btn-search" ).click(function() {
		$('.sosearchpro-wrapper').slideToggle(200);
		$(this).toggleClass('active');
	});


	var $nav = $(".deals_module_wrapper");
	$nav.each(function () {
		$(this).owlCarousel2({
			nav:true,
			dots: false,
			slideBy: 1,
			margin:0,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"> </i>'],
			responsive:{
				0:{items:1},
				600:{items:1},
				1000:{items:1}
			}
		});
	})

   var austDay = new Date(2019, 9 - 1, 24);
   $('.defaultCountdown-47').countdown(austDay, function(event)
   {
      var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
   });

   var austDay = new Date(2019, 10 - 1, 21);
   $('.defaultCountdown-28').countdown(austDay, function(event)
   {
      var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
   });

	var austDay = new Date(2019, 8 - 1, 11);
	$('.defaultCountdown-41').countdown(austDay, function(event)
	{
	  var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});

	var austDay = new Date(2019, 8 - 1, 11);
	$('.defaultCountdown-58').countdown(austDay, function(event)
	{
	  var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});

	var austDay = new Date(2019, 10 - 1, 22);
	$('.defaultCountdown-45').countdown(austDay, function(event)
	{
	  var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});

	var austDay = new Date(2019, 9 - 1, 23);
	$('.defaultCountdown-44').countdown(austDay, function(event)
	{
	  var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});

	var austDay = new Date(2018, 2 - 1, 09);
	$('.defaultCountdown-76').countdown(austDay, function(event)
	{
	var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});

	var austDay = new Date(2018, 11 - 1, 24);
	$('.defaultCountdown-66').countdown(austDay, function(event)
	{
	var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});		

	var austDay = new Date(2019, 2 - 1, 09);
	$('.defaultCountdown-94').countdown(austDay, function(event)
	{
	var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});

	var austDay = new Date(2019, 12 - 1, 15);
	$('.defaultCountdown-58').countdown(austDay, function(event)
	{
	var $this = $(this).html(event.strftime('' + '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Days </div></div>' + '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Hours </div></div>' + '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Mins </div></div>' + '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Secs </div></div>'));
	});


	//extraslider-homepage
	var listdeal1 = [];
	listdeal1.push('product_time_32|2019/09/23 00:00:00');
	listdeal1.push('product_time_74|2017/08/31 00:00:00');
	listdeal1.push('product_time_32|2019/09/23 00:00:00');
	listdeal1.push('product_time_74|2017/08/31 00:00:00');
	listdeal1.push('product_time_32|2019/09/23 00:00:00');
	listdeal1.push('product_time_68|2017/08/31 00:00:00');
	listdeal1.push('product_time_94|2019/02/09 00:00:00');
	listdeal1.push('product_time_58|2019/12/15 00:00:00');
	listdeal1.push('product_time_31|2019/09/03 00:00:00');
	listdeal1.push('product_time_41|2019/08/11 00:00:00');
	listdeal1.push('product_time_36|2019/08/18 00:00:00');
	listdeal1.push('product_time_68|2017/08/31 00:00:00');
	listdeal1.push('product_time_94|2019/02/09 00:00:00');
	listdeal1.push('product_time_58|2019/12/15 00:00:00');
	listdeal1.push('product_time_31|2019/09/03 00:00:00');
	listdeal1.push('product_time_41|2019/08/11 00:00:00');
	listdeal1.push('product_time_36|2019/08/18 00:00:00');
	listdeal1.push('product_time_68|2017/08/31 00:00:00');
	listdeal1.push('product_time_94|2019/02/09 00:00:00');
	listdeal1.push('product_time_58|2019/12/15 00:00:00');
	listdeal1.push('product_time_31|2019/09/03 00:00:00');
	listdeal1.push('product_time_41|2019/08/11 00:00:00');
	listdeal1.push('product_time_36|2019/08/18 00:00:00');
	listdeal1.push('product_time_74|2017/08/31 00:00:00');
	(function (element) {
	var $element = $(element),
			$extraslider = $('.extraslider-inner', $element),
			$featureslider = $('.product-feature', $element),
			_delay = 1000,
			_duration = 1000,
			_effect = 'none';

	$extraslider.on('initialized.owl.carousel2', function () {
		var $item_active = $('.extraslider-inner .owl2-item.active', $element);
		if ($item_active.length > 1 && _effect != 'none') {
			_getAnimate($item_active);
		}
		else {
			var $item = $('.extraslider-inner .owl2-item', $element);
			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
		}
					//$('.extraslider-inner .owl2-dots', $element).insertAfter($('.extraslider-inner .owl2-prev', $element));
			//$('.extraslider-inner .owl2-controls', $element).insertBefore($extraslider).addClass('extraslider');
			
			});

	$extraslider.owlCarousel2({
		rtl: false,
		margin: 5,
		slideBy: 4,
		autoplay: false,
		autoplayHoverPause: 0,
		autoplayTimeout: 4000,
		autoplaySpeed: 1000,
		startPosition: 0,
		mouseDrag: true,
		touchDrag: true,
		autoWidth: false,
		responsive: {
			0: 	{ items: 2 } ,
			480: { items: 3 },
			768: { items: 4 },
			992: { items: 4 },
			1200: {items: 6}
		},
		dotClass: 'owl2-dot',
		dotsClass: 'owl2-dots',
		dots: false,
		dotsSpeed: 500,
		nav: true,
		loop: true,
		navSpeed: 500,
		navText: ['', ''],
		navClass: ['owl2-prev', 'owl2-next']
	});

	$extraslider.on('translated.owl.carousel2', function (e) {
		var $item_active = $('.extraslider-inner .owl2-item.active', $element);
		var $item = $('.extraslider-inner .owl2-item', $element);

		_UngetAnimate($item);

		if ($item_active.length > 1 && _effect != 'none') {
			_getAnimate($item_active);
		} else {
			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
		}
	});
	/*feature product*/
	$featureslider.on('initialized.owl.carousel2', function () {
		var $item_active = $('.product-feature .owl2-item.active', $element);
		if ($item_active.length > 1 && _effect != 'none') {
			_getAnimate($item_active);
		}
		else {
			var $item = $('.owl2-item', $element);
			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
		}
					$('.product-feature .owl2-dots', $element).insertAfter($('.product-feature .owl2-prev', $element));
			$('.product-feature .owl2-controls', $element).insertBefore($featureslider).addClass('featureslider');	
			});

	$featureslider.owlCarousel2({
		rtl: false,
		margin: 5,
		slideBy: 4,
		autoplay: false,
		autoplayHoverPause: 0,
		autoplayTimeout: 4000,
		autoplaySpeed: 1000,
		startPosition: 0,
		mouseDrag: true,
		touchDrag: true,
		autoWidth: false,
		responsive: {
			0: 	{ items: 1 } ,
			480: { items: 1 },
			768: { items: 1 },
			992: { items: 1 },
			1200: {items: 1}
		},
		dotClass: 'owl2-dot',
			dotsClass: 'owl2-dots',
		dots: false,
		dotsSpeed: 500,
		nav: true,
		loop: true,
		navSpeed: 500,
		navText: ['', ''],
		navClass: ['owl2-prev', 'owl2-next']
	});

	$featureslider.on('translated.owl.carousel2', function (e) {
		var $item_active = $('.product-feature .owl2-item.active', $element);
		var $item = $('.product-feature .owl2-item', $element);

		_UngetAnimate($item);

		if ($item_active.length > 1 && _effect != 'none') {
			_getAnimate($item_active);
		} else {
			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
		}
	});
	
	function _getAnimate($el) {
		if (_effect == 'none') return;
		$extraslider.removeClass('extra-animate');
		$el.each(function (i) {
			var $_el = $(this);
			$(this).css({
				'-webkit-animation': _effect + ' ' + _duration + "ms ease both",
				'-moz-animation': _effect + ' ' + _duration + "ms ease both",
				'-o-animation': _effect + ' ' + _duration + "ms ease both",
				'animation': _effect + ' ' + _duration + "ms ease both",
				'-webkit-animation-delay': +i * _delay + 'ms',
				'-moz-animation-delay': +i * _delay + 'ms',
				'-o-animation-delay': +i * _delay + 'ms',
				'animation-delay': +i * _delay + 'ms',
				'opacity': 1
			}).animate({
				opacity: 1
			});

			if (i == $el.size() - 1) {
				$extraslider.addClass("extra-animate");
			}
		});
	}

	function _UngetAnimate($el) {
		$el.each(function (i) {
			$(this).css({
				'animation': '',
				'-webkit-animation': '',
				'-moz-animation': '',
				'-o-animation': '',
				'opacity': 1
			});
		});
	}
	data = new Date(2013, 10, 26, 12, 00, 00);
	function CountDown(date, id) {
		dateNow = new Date();
		amount = date.getTime() - dateNow.getTime();
		//amount = 3600000;
		if (amount < 0 && $('#' + id).length) {
			$('.' + id).html("Now!");
		} else {
			days = 0;
			hours = 0;
			mins = 0;
			secs = 0;
			out = "";
			amount = Math.floor(amount / 1000);
			days = Math.floor(amount / 86400);
			amount = amount % 86400;
			hours = Math.floor(amount / 3600);
			amount = amount % 3600;
			mins = Math.floor(amount / 60);
			amount = amount % 60;
			secs = Math.floor(amount);

			out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + " <div class='name-time'>" + ((days == 1) ? "Day" : "Days") + "</div>" + "</div> ";

			out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Hour" : "Hours") + "</div>" + "</div> ";

				out += "<div class='time-item time-min'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
				out += "<div class='time-item time-sec'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Sec" : "Secs") + "</div>" + "</div> ";
				out = out.substr(0, out.length - 2);
			

			$('.' + id).html(out);

			setTimeout(function () {
				CountDown(date, id);
			}, 1000);
		}
	}
	if (listdeal1.length > 0) {
		for (var i = 0; i < listdeal1.length; i++) {
			var arr = listdeal1[i].split("|");
			if (arr[1].length) {
				var data = new Date(arr[1]);
				CountDown(data, arr[0]);
			}
		}
	}
	})('#so_deals_197081497089146');

	var $nav = $("#thumb-slider");
								
	$nav.each(function () {
		$(this).owlCarousel2({
			nav:true,
			dots: false,
			slideBy: 1,
			margin:10,
			navText: ['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'],
													responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		});
	})

	$('#input-option261').on('click', 'span', function () {
	   $('#input-option261 span').removeClass("active");
	   $(this).addClass("active");
	});
	$('#input-option246').on('click', 'span', function() {
		$('#input-option246 span').removeClass("active");
		$(this).addClass("active");
	});
	
});
