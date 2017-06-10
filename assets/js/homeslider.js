$(document).ready(function(){
var owl = $(".sohomeslider-inner-1");
			var total_item = 3;
			function customCenter() {
				$(".owl2-item.active .item .sohomeslider-description .image ").addClass("img-active");
				$(".owl2-item.active .item .sohomeslider-description .text .tilte ").addClass("title-active");
				$(".owl2-item.active .item .sohomeslider-description .text h4 ").addClass("h4-active");
				$(".owl2-item.active .item .sohomeslider-description .text .des").addClass("des-active");
			}
			function customPager() {
				$(".owl2-item.active .item .sohomeslider-description .image ").addClass("img-active");
				$(".owl2-item.active .item .sohomeslider-description .text .tilte ").addClass("title-active");
				$(".owl2-item.active .item .sohomeslider-description .text h4 ").addClass("h4-active");
				$(".owl2-item.active .item .sohomeslider-description .text .des").addClass("des-active");
			}
			$(".sohomeslider-inner-1").owlCarousel2({
					animateOut: 'fadeOut',
					animateIn: 'fadeIn',
					autoplay: true,
					autoplayTimeout: 5000,
					autoplaySpeed:  1000,
					smartSpeed: 500,
					autoplayHoverPause: true,
					startPosition: 0,
					mouseDrag:  true,
					touchDrag: true,
					dots: true,
					autoWidth: false,
					margin: 30,
										dotClass: "owl2-dot",
					dotsClass: "owl2-dots",
					// center:false,
					loop: true,
					navText: ["", ""],
					navClass: ["owl2-prev", "owl2-next"],
					responsive: {
					0:{	items: 1,
						nav: total_item <= 1 ? false : ((false) ? true: false),
					},
					480:{ items: 1,
						nav: total_item <= 1 ? false : ((false) ? true: false),
					},
					768:{ items: 1,
						nav: total_item <= 1 ? false : ((false) ? true: false),
					},
					992:{ items: 1,
						nav: total_item <= 1 ? false : ((false) ? true: false),
					},
					1200:{ items: 1,
						nav: total_item <= 1 ? false : ((false) ? true: false),
					}
				},
				onInitialized : customPager,
				onTranslated  : customCenter,
			});
});