jQuery(document).ready(function ($) {

	var $tag_id = $('#so_listing_tabs_213'), 
		$element = $tag_id,
		 $extraslider = $('.wap-listing-tabs', $element),
		parent_active = 	$('.items-category-sell', $tag_id),
		total_product = parent_active.data('total'),
		tab_active = $('.ltabs-items-inner',parent_active),
		nb_column0 = 5,
		nb_column1 = 4,
		nb_column2 = 3,
		nb_column3 = 2,
		nb_column4 = 1;
		
		$extraslider.on("initialized.owl.carousel2", function () {
			$(".owl2-controls", tab_active).insertBefore(tab_active);
		});
		
		tab_active.owlCarousel2({
			rtl: false,
			nav: true,
			dots: false,	
			margin: 0,
			loop:  false,
			autoplay: false,
			autoplayHoverPause: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			mouseDrag: true,
			touchDrag: true,
			navRewind: true,
			navText: ['',''],
			rtl: false,			
		    responsive: {
				0: {
					items: nb_column4,
					nav: total_product <= nb_column4 ? false : ((true) ? true: false),
				},
				480: {
					items: nb_column3,
					nav: total_product <= nb_column3 ? false : ((true) ? true: false),
				},
				768: {
					items: nb_column2,
					nav: total_product <= nb_column2 ? false : ((true) ? true: false),
				},
				992: {
					items: nb_column1,
					nav: total_product <= nb_column1 ? false : ((true) ? true: false),
				},
				1200: {
					items: nb_column0,
					nav: total_product <= nb_column0 ? false : ((true) ? true: false),
				},
			}
		});

	(function (element) {
		var $element = $(element),
			$tab = $('.ltabs-tab', $element),
			$tab_label = $('.ltabs-tab-label', $tab),
			$tabs = $('.ltabs-tabs', $element),
			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
			$items_content = $('.ltabs-items', $element),
			$items_inner = $('.ltabs-items-inner', $items_content),
			$items_first_active = $('.ltabs-items-selected', $element),
			$load_more = $('.ltabs-loadmore', $element),
			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
			$select_box = $('.ltabs-selectbox', $element),
			$tab_label_select = $('.ltabs-tab-selected', $element),
			setting = 'a:74:{s:6:"action";s:9:"save_edit";s:4:"name";s:23:"Fashion - Home Layout 1";s:18:"module_description";a:2:{i:1;a:1:{s:9:"head_name";s:7:"Fashion";}i:2;a:1:{s:9:"head_name";s:7:"Fashion";}}s:9:"head_name";s:7:"Fashion";s:17:"disp_title_module";s:1:"1";s:6:"status";s:1:"1";s:11:"type_layout";s:1:"0";s:12:"class_suffix";s:29:"custom-listingtab default-nav";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"5";s:10:"nb_column1";s:1:"4";s:10:"nb_column2";s:1:"3";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"2";s:11:"type_source";s:1:"1";s:8:"category";a:1:{i:0;s:2:"79";}s:14:"child_category";s:1:"1";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:7:"p.price";s:16:"product_ordering";s:3:"ASC";s:12:"source_limit";s:2:"12";s:13:"catid_preload";s:2:"79";s:17:"field_product_tab";a:3:{i:0;s:6:"rating";i:1;s:12:"p_date_added";i:2;s:4:"sell";}s:13:"field_preload";s:4:"sell";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"30";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"20";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"0";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:3:"317";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"180";s:6:"height";s:3:"180";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"1";s:12:"banner_image";s:32:"catalog/demo/banners/home1/6.jpg";s:12:"banner_width";s:3:"196";s:13:"banner_height";s:3:"540";s:16:"banner_image_url";s:1:"#";s:6:"effect";s:4:"none";s:6:"margin";s:1:"0";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"1";s:12:"display_loop";s:1:"0";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:3:"213";s:5:"start";i:0;}'
			type_show = 'slider';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.ltabs-tabs-wrap', $element),
				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
			if ($(window).innerWidth() <= 479) {
				$tab_wrap.addClass('ltabs-selectbox');
			} else {
				$tab_wrap.removeClass('ltabs-selectbox');
			}
		}

		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
				$('.ltabs-tabs', $element).removeClass('ltabs-open');
			} else {
				$('.ltabs-tabs', $element).addClass('ltabs-open');
			}
		});

		$(window).resize(function () {
			if ($(window).innerWidth() <= 479) {
				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
			} else {
				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
			}
		});

		function showAnimateItems(el) {
			var $_items = $('.new-ltabs-item', el), nub = 0;
			$('.ltabs-loadmore-btn', el).fadeOut('fast');
			$_items.each(function (i) {
				nub++;
				switch(effect) {
					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
					default: animatesItems($(this),nub*delay,i,el);
				}
				if (i == $_items.length - 1) {
					$('.ltabs-loadmore-btn', el).fadeIn(3000);
				}
				$(this).removeClass('new-ltabs-item');
			});
		}

		function animatesItems($this,fdelay,i,el) {
			var $_items = $('.ltabs-item', el);
			$this.stop(true, true).attr("style",
				"-webkit-animation:" + effect +" "+ duration +"ms;"
				+ "-moz-animation:" + effect +" "+ duration +"ms;"
				+ "-o-animation:" + effect +" "+ duration +"ms;"
				+ "-moz-animation-delay:" + fdelay + "ms;"
				+ "-webkit-animation-delay:" + fdelay + "ms;"
				+ "-o-animation-delay:" + fdelay + "ms;"
				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
					opacity: 1,
					filter: 'alpha(opacity = 100)'
				}, {
					delay: 1000
				});
			if (i == ($_items.length - 1)) {
				$(".ltabs-items-inner").addClass("play");
			}
		}
		if (type_show == 'loadmore') {
			showAnimateItems($items_first_active);
		}
		$tab.on('click.ltabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
				$this.parents('.ltabs-tabs').removeClass('ltabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content-l');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('ltabs-items-selected');
			_items_active.addClass('ltabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
			var $loading = $('.ltabs-loading', _items_active);
			var loaded = _items_active.hasClass('ltabs-items-loaded');
			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('ltabs-process')) {
				_items_active.addClass('ltabs-process');
				var category_id 		= $this.attr('data-category-id');
				$loading.show();
				$.ajax({
					type: 'POST',
					url: ajax_url,
					data: {
						is_ajax_listing_tabs: 1,
						ajax_reslisting_start: 0,
						categoryid: category_id,
						setting : setting,
						lbmoduleid: 213					},
					success: function (data) {
						if (data.items_markup != '') {
							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
							$loading.remove();
							if (type_show != 'slider') {
								showAnimateItems(_items_active);
							}
							updateStatus(_items_active);
						}
						if(typeof(_SoQuickView) != 'undefined'){
							_SoQuickView();
						}
							
					},
					dataType: 'json'
				});

			} else {
				if (type_show == 'loadmore') {
					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
					showAnimateItems(_items_active);
				}else{
					var $tag_id = $('#so_listing_tabs_213');
					var owl = $('.owl2-carousel' , _items_active);
					/*var $navpage = $(".wap-listing-tabs", $tag_id);
					$navpage.siblings(".owl2-controls").addClass('hidden');*/
					
					owl = owl.data('owlCarousel2');

					if (typeof owl !== 'undefined') {
						owl.onResize();
					}
				}
			}
		});

		function updateStatus($el) {
			$('.ltabs-loadmore-btn', $el).removeClass('loading');
			var countitem = $('.ltabs-item', $el).length;
			$('.ltabs-image-loading', $el).css({display: 'none'});
			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

			if (countitem >= rl_total) {
				$('.ltabs-loadmore-btn', $el).addClass('loaded');
				$('.ltabs-image-loading', $el).css({display: 'none'});
				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
				$('.ltabs-loadmore-btn', $el).removeClass('loading');
			}
		}

		$btn_loadmore.on('click.loadmore', function () {
			var $this = $(this);
			if ($this.hasClass('loaded') || $this.hasClass('loading')) {
				return false;
			} else {
				$this.addClass('loading');
				$('.ltabs-image-loading', $this).css({display: 'inline-block'});
				var rl_start 				= $this.parent().attr('data-rl_start'),
					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
					effect 					= $this.parent().attr('data-effect'),
					category_id 			= $this.parent().attr('data-categoryid'),
					items_active 			= $this.parent().attr('data-active-content');
					
				var _items_active = $(items_active,$element);
				
				$.ajax({
					type: 'POST',
					url: rl_ajaxurl,
					data: {
						is_ajax_listing_tabs: 1,
						ajax_reslisting_start: rl_start,
						categoryid: category_id,
						setting: setting,
						lbmoduleid: 213					},
					success: function (data) {
						if (data.items_markup != '') {
							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
							$('.ltabs-image-loading', $this).css({display: 'none'});
							showAnimateItems(_items_active);
							updateStatus(_items_active);
						}
						if(typeof(_SoQuickView) != 'undefined'){
							_SoQuickView();
						}
					}, dataType: 'json'
				});
			}
			return false;
		});
	})('#so_listing_tabs_213');


	var $tag_id = $('#so_listing_tabs_222'), 
		$element = $tag_id,
		 $extraslider = $('.wap-listing-tabs', $element),
		parent_active = 	$('.items-category-rating', $tag_id),
		total_product = parent_active.data('total'),
		tab_active = $('.ltabs-items-inner',parent_active),
		nb_column0 = 5,
		nb_column1 = 4,
		nb_column2 = 3,
		nb_column3 = 2,
		nb_column4 = 1;
		
		$extraslider.on("initialized.owl.carousel2", function () {
			$(".owl2-controls", tab_active).insertBefore(tab_active);
		});
		
		tab_active.owlCarousel2({
			rtl: false,
			nav: true,
			dots: false,	
			margin: 0,
			loop:  false,
			autoplay: false,
			autoplayHoverPause: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			mouseDrag: true,
			touchDrag: true,
			navRewind: true,
			navText: ['',''],
			rtl: false,			
		    responsive: {
				0: {
					items: nb_column4,
					nav: total_product <= nb_column4 ? false : ((true) ? true: false),
				},
				480: {
					items: nb_column3,
					nav: total_product <= nb_column3 ? false : ((true) ? true: false),
				},
				768: {
					items: nb_column2,
					nav: total_product <= nb_column2 ? false : ((true) ? true: false),
				},
				992: {
					items: nb_column1,
					nav: total_product <= nb_column1 ? false : ((true) ? true: false),
				},
				1200: {
					items: nb_column0,
					nav: total_product <= nb_column0 ? false : ((true) ? true: false),
				},
			}
		});


		(function (element) {
		var $element = $(element),
			$tab = $('.ltabs-tab', $element),
			$tab_label = $('.ltabs-tab-label', $tab),
			$tabs = $('.ltabs-tabs', $element),
			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
			$items_content = $('.ltabs-items', $element),
			$items_inner = $('.ltabs-items-inner', $items_content),
			$items_first_active = $('.ltabs-items-selected', $element),
			$load_more = $('.ltabs-loadmore', $element),
			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
			$select_box = $('.ltabs-selectbox', $element),
			$tab_label_select = $('.ltabs-tab-selected', $element),
			setting = 'a:74:{s:6:"action";s:9:"save_edit";s:4:"name";s:26:"Electronic - Home Layout 1";s:18:"module_description";a:2:{i:1;a:1:{s:9:"head_name";s:11:"Electronics";}i:2;a:1:{s:9:"head_name";s:11:"Electronics";}}s:9:"head_name";s:11:"Electronics";s:17:"disp_title_module";s:1:"1";s:6:"status";s:1:"1";s:11:"type_layout";s:1:"0";s:12:"class_suffix";s:48:"custom-listingtab default-nav clearfix img-float";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"5";s:10:"nb_column1";s:1:"4";s:10:"nb_column2";s:1:"3";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"2";s:11:"type_source";s:1:"1";s:8:"category";a:1:{i:0;s:2:"17";}s:14:"child_category";s:1:"1";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:7:"pd.name";s:16:"product_ordering";s:4:"DESC";s:12:"source_limit";s:2:"12";s:13:"catid_preload";s:2:"17";s:17:"field_product_tab";a:3:{i:0;s:6:"rating";i:1;s:12:"p_date_added";i:2;s:4:"sell";}s:13:"field_preload";s:6:"rating";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"70";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"20";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"0";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:3:"427";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"180";s:6:"height";s:3:"180";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"1";s:12:"banner_image";s:32:"catalog/demo/banners/home1/7.jpg";s:12:"banner_width";s:3:"196";s:13:"banner_height";s:3:"540";s:16:"banner_image_url";s:1:"#";s:6:"effect";s:4:"none";s:6:"margin";s:1:"0";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"1";s:12:"display_loop";s:1:"0";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:3:"222";s:5:"start";i:0;}'
			type_show = 'slider';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.ltabs-tabs-wrap', $element),
				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
			if ($(window).innerWidth() <= 479) {
				$tab_wrap.addClass('ltabs-selectbox');
			} else {
				$tab_wrap.removeClass('ltabs-selectbox');
			}
		}

		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
				$('.ltabs-tabs', $element).removeClass('ltabs-open');
			} else {
				$('.ltabs-tabs', $element).addClass('ltabs-open');
			}
		});

		$(window).resize(function () {
			if ($(window).innerWidth() <= 479) {
				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
			} else {
				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
			}
		});

		function showAnimateItems(el) {
			var $_items = $('.new-ltabs-item', el), nub = 0;
			$('.ltabs-loadmore-btn', el).fadeOut('fast');
			$_items.each(function (i) {
				nub++;
				switch(effect) {
					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
					default: animatesItems($(this),nub*delay,i,el);
				}
				if (i == $_items.length - 1) {
					$('.ltabs-loadmore-btn', el).fadeIn(3000);
				}
				$(this).removeClass('new-ltabs-item');
			});
		}

		function animatesItems($this,fdelay,i,el) {
			var $_items = $('.ltabs-item', el);
			$this.stop(true, true).attr("style",
				"-webkit-animation:" + effect +" "+ duration +"ms;"
				+ "-moz-animation:" + effect +" "+ duration +"ms;"
				+ "-o-animation:" + effect +" "+ duration +"ms;"
				+ "-moz-animation-delay:" + fdelay + "ms;"
				+ "-webkit-animation-delay:" + fdelay + "ms;"
				+ "-o-animation-delay:" + fdelay + "ms;"
				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
					opacity: 1,
					filter: 'alpha(opacity = 100)'
				}, {
					delay: 1000
				});
			if (i == ($_items.length - 1)) {
				$(".ltabs-items-inner").addClass("play");
			}
		}
		if (type_show == 'loadmore') {
			showAnimateItems($items_first_active);
		}
		$tab.on('click.ltabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
				$this.parents('.ltabs-tabs').removeClass('ltabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content-l');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('ltabs-items-selected');
			_items_active.addClass('ltabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
			var $loading = $('.ltabs-loading', _items_active);
			var loaded = _items_active.hasClass('ltabs-items-loaded');
			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('ltabs-process')) {
				_items_active.addClass('ltabs-process');
				var category_id 		= $this.attr('data-category-id');
				$loading.show();
				$.ajax({
					type: 'POST',
					url: ajax_url,
					data: {
						is_ajax_listing_tabs: 1,
						ajax_reslisting_start: 0,
						categoryid: category_id,
						setting : setting,
						lbmoduleid: 222					},
					success: function (data) {
						if (data.items_markup != '') {
							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
							$loading.remove();
							if (type_show != 'slider') {
								showAnimateItems(_items_active);
							}
							updateStatus(_items_active);
						}
						if(typeof(_SoQuickView) != 'undefined'){
							_SoQuickView();
						}
							
					},
					dataType: 'json'
				});

			} else {
				if (type_show == 'loadmore') {
					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
					showAnimateItems(_items_active);
				}else{
					var $tag_id = $('#so_listing_tabs_222');
					var owl = $('.owl2-carousel' , _items_active);
					/*var $navpage = $(".wap-listing-tabs", $tag_id);
					$navpage.siblings(".owl2-controls").addClass('hidden');*/
					
					owl = owl.data('owlCarousel2');

					if (typeof owl !== 'undefined') {
						owl.onResize();
					}
				}
			}
		});

		function updateStatus($el) {
			$('.ltabs-loadmore-btn', $el).removeClass('loading');
			var countitem = $('.ltabs-item', $el).length;
			$('.ltabs-image-loading', $el).css({display: 'none'});
			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

			if (countitem >= rl_total) {
				$('.ltabs-loadmore-btn', $el).addClass('loaded');
				$('.ltabs-image-loading', $el).css({display: 'none'});
				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
				$('.ltabs-loadmore-btn', $el).removeClass('loading');
			}
		}

		$btn_loadmore.on('click.loadmore', function () {
			var $this = $(this);
			if ($this.hasClass('loaded') || $this.hasClass('loading')) {
				return false;
			} else {
				$this.addClass('loading');
				$('.ltabs-image-loading', $this).css({display: 'inline-block'});
				var rl_start 				= $this.parent().attr('data-rl_start'),
					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
					effect 					= $this.parent().attr('data-effect'),
					category_id 			= $this.parent().attr('data-categoryid'),
					items_active 			= $this.parent().attr('data-active-content');
					
				var _items_active = $(items_active,$element);
				
				$.ajax({
					type: 'POST',
					url: rl_ajaxurl,
					data: {
						is_ajax_listing_tabs: 1,
						ajax_reslisting_start: rl_start,
						categoryid: category_id,
						setting: setting,
						lbmoduleid: 222					},
					success: function (data) {
						if (data.items_markup != '') {
							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
							$('.ltabs-image-loading', $this).css({display: 'none'});
							showAnimateItems(_items_active);
							updateStatus(_items_active);
						}
						if(typeof(_SoQuickView) != 'undefined'){
							_SoQuickView();
						}
					}, dataType: 'json'
				});
			}
			return false;
		});
	})('#so_listing_tabs_222');
 

	var $tag_id = $('#so_listing_tabs_229'), 
		$element = $tag_id,
		 $extraslider = $('.wap-listing-tabs', $element),
		parent_active = 	$('.items-category-sell', $tag_id),
		total_product = parent_active.data('total'),
		tab_active = $('.ltabs-items-inner',parent_active),
		nb_column0 = 5,
		nb_column1 = 4,
		nb_column2 = 3,
		nb_column3 = 2,
		nb_column4 = 1;
		
		$extraslider.on("initialized.owl.carousel2", function () {
			$(".owl2-controls", tab_active).insertBefore(tab_active);
		});
		
		tab_active.owlCarousel2({
			rtl: false,
			nav: true,
			dots: false,	
			margin: 0,
			loop:  false,
			autoplay: false,
			autoplayHoverPause: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			mouseDrag: true,
			touchDrag: true,
			navRewind: true,
			navText: ['',''],
			rtl: false,			
		    responsive: {
				0: {
					items: nb_column4,
					nav: total_product <= nb_column4 ? false : ((true) ? true: false),
				},
				480: {
					items: nb_column3,
					nav: total_product <= nb_column3 ? false : ((true) ? true: false),
				},
				768: {
					items: nb_column2,
					nav: total_product <= nb_column2 ? false : ((true) ? true: false),
				},
				992: {
					items: nb_column1,
					nav: total_product <= nb_column1 ? false : ((true) ? true: false),
				},
				1200: {
					items: nb_column0,
					nav: total_product <= nb_column0 ? false : ((true) ? true: false),
				},
			}
		});
		
		(function (element) {
		var $element = $(element),
			$tab = $('.ltabs-tab', $element),
			$tab_label = $('.ltabs-tab-label', $tab),
			$tabs = $('.ltabs-tabs', $element),
			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
			$items_content = $('.ltabs-items', $element),
			$items_inner = $('.ltabs-items-inner', $items_content),
			$items_first_active = $('.ltabs-items-selected', $element),
			$load_more = $('.ltabs-loadmore', $element),
			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
			$select_box = $('.ltabs-selectbox', $element),
			$tab_label_select = $('.ltabs-tab-selected', $element),
			setting = 'a:74:{s:6:"action";s:9:"save_edit";s:4:"name";s:22:"Sports - Home Layout 1";s:18:"module_description";a:2:{i:1;a:1:{s:9:"head_name";s:6:"Sports";}i:2;a:1:{s:9:"head_name";s:6:"Sports";}}s:9:"head_name";s:6:"Sports";s:17:"disp_title_module";s:1:"1";s:6:"status";s:1:"1";s:11:"type_layout";s:1:"0";s:12:"class_suffix";s:44:"custom-listingtab default-nav clearfix bt-sp";s:16:"item_link_target";s:5:"_self";s:10:"nb_column0";s:1:"5";s:10:"nb_column1";s:1:"4";s:10:"nb_column2";s:1:"3";s:10:"nb_column3";s:1:"2";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"2";s:11:"type_source";s:1:"1";s:8:"category";a:1:{i:0;s:2:"75";}s:14:"child_category";s:1:"1";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:7:"p.price";s:16:"product_ordering";s:3:"ASC";s:12:"source_limit";s:2:"12";s:13:"catid_preload";s:2:"75";s:17:"field_product_tab";a:3:{i:0;s:6:"rating";i:1;s:12:"p_date_added";i:2;s:4:"sell";}s:13:"field_preload";s:4:"sell";s:15:"tab_all_display";s:1:"0";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"0";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"70";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"20";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"1";s:15:"display_compare";s:1:"1";s:14:"display_rating";s:1:"0";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:3:"227";s:17:"product_image_num";s:1:"2";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"180";s:6:"height";s:3:"180";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"1";s:12:"banner_image";s:32:"catalog/demo/banners/home1/8.jpg";s:12:"banner_width";s:3:"196";s:13:"banner_height";s:3:"540";s:16:"banner_image_url";s:1:"#";s:6:"effect";s:4:"none";s:6:"margin";s:1:"0";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"1";s:12:"display_loop";s:1:"0";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:3:"229";s:5:"start";i:0;}'
			type_show = 'slider';
			
		enableSelectBoxes();
		function enableSelectBoxes() {
			$tab_wrap = $('.ltabs-tabs-wrap', $element),
				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
			if ($(window).innerWidth() <= 479) {
				$tab_wrap.addClass('ltabs-selectbox');
			} else {
				$tab_wrap.removeClass('ltabs-selectbox');
			}
		}

		$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
			if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
				$('.ltabs-tabs', $element).removeClass('ltabs-open');
			} else {
				$('.ltabs-tabs', $element).addClass('ltabs-open');
			}
		});

		$(window).resize(function () {
			if ($(window).innerWidth() <= 479) {
				$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
			} else {
				$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
			}
		});

		function showAnimateItems(el) {
			var $_items = $('.new-ltabs-item', el), nub = 0;
			$('.ltabs-loadmore-btn', el).fadeOut('fast');
			$_items.each(function (i) {
				nub++;
				switch(effect) {
					case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
					default: animatesItems($(this),nub*delay,i,el);
				}
				if (i == $_items.length - 1) {
					$('.ltabs-loadmore-btn', el).fadeIn(3000);
				}
				$(this).removeClass('new-ltabs-item');
			});
		}

		function animatesItems($this,fdelay,i,el) {
			var $_items = $('.ltabs-item', el);
			$this.stop(true, true).attr("style",
				"-webkit-animation:" + effect +" "+ duration +"ms;"
				+ "-moz-animation:" + effect +" "+ duration +"ms;"
				+ "-o-animation:" + effect +" "+ duration +"ms;"
				+ "-moz-animation-delay:" + fdelay + "ms;"
				+ "-webkit-animation-delay:" + fdelay + "ms;"
				+ "-o-animation-delay:" + fdelay + "ms;"
				+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
					opacity: 1,
					filter: 'alpha(opacity = 100)'
				}, {
					delay: 1000
				});
			if (i == ($_items.length - 1)) {
				$(".ltabs-items-inner").addClass("play");
			}
		}
		if (type_show == 'loadmore') {
			showAnimateItems($items_first_active);
		}
		$tab.on('click.ltabs-tab', function () {
			var $this = $(this);
			if ($this.hasClass('tab-sel')) return false;
			if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
				$this.parents('.ltabs-tabs').removeClass('ltabs-open');
			}
			$tab.removeClass('tab-sel');
			$this.addClass('tab-sel');
			var items_active = $this.attr('data-active-content-l');
			var _items_active = $(items_active,$element);
			$items_content.removeClass('ltabs-items-selected');
			_items_active.addClass('ltabs-items-selected');
			$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
			var $loading = $('.ltabs-loading', _items_active);
			var loaded = _items_active.hasClass('ltabs-items-loaded');
			type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
			if (!loaded && !_items_active.hasClass('ltabs-process')) {
				_items_active.addClass('ltabs-process');
				var category_id 		= $this.attr('data-category-id');
				$loading.show();
				$.ajax({
					type: 'POST',
					url: ajax_url,
					data: {
						is_ajax_listing_tabs: 1,
						ajax_reslisting_start: 0,
						categoryid: category_id,
						setting : setting,
						lbmoduleid: 229					},
					success: function (data) {
						if (data.items_markup != '') {
							$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
							_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
							$loading.remove();
							if (type_show != 'slider') {
								showAnimateItems(_items_active);
							}
							updateStatus(_items_active);
						}
						if(typeof(_SoQuickView) != 'undefined'){
							_SoQuickView();
						}
							
					},
					dataType: 'json'
				});

			} else {
				if (type_show == 'loadmore') {
					$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
					showAnimateItems(_items_active);
				}else{
					var $tag_id = $('#so_listing_tabs_229');
					var owl = $('.owl2-carousel' , _items_active);
					/*var $navpage = $(".wap-listing-tabs", $tag_id);
					$navpage.siblings(".owl2-controls").addClass('hidden');*/
					
					owl = owl.data('owlCarousel2');

					if (typeof owl !== 'undefined') {
						owl.onResize();
					}
				}
			}
		});

		function updateStatus($el) {
			$('.ltabs-loadmore-btn', $el).removeClass('loading');
			var countitem = $('.ltabs-item', $el).length;
			$('.ltabs-image-loading', $el).css({display: 'none'});
			$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
			var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
			var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
			var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

			if (countitem >= rl_total) {
				$('.ltabs-loadmore-btn', $el).addClass('loaded');
				$('.ltabs-image-loading', $el).css({display: 'none'});
				$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
				$('.ltabs-loadmore-btn', $el).removeClass('loading');
			}
		}

		$btn_loadmore.on('click.loadmore', function () {
			var $this = $(this);
			if ($this.hasClass('loaded') || $this.hasClass('loading')) {
				return false;
			} else {
				$this.addClass('loading');
				$('.ltabs-image-loading', $this).css({display: 'inline-block'});
				var rl_start 				= $this.parent().attr('data-rl_start'),
					rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
					effect 					= $this.parent().attr('data-effect'),
					category_id 			= $this.parent().attr('data-categoryid'),
					items_active 			= $this.parent().attr('data-active-content');
					
				var _items_active = $(items_active,$element);
				
				$.ajax({
					type: 'POST',
					url: rl_ajaxurl,
					data: {
						is_ajax_listing_tabs: 1,
						ajax_reslisting_start: rl_start,
						categoryid: category_id,
						setting: setting,
						lbmoduleid: 229					},
					success: function (data) {
						if (data.items_markup != '') {
							$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
							$('.ltabs-image-loading', $this).css({display: 'none'});
							showAnimateItems(_items_active);
							updateStatus(_items_active);
						}
						if(typeof(_SoQuickView) != 'undefined'){
							_SoQuickView();
						}
					}, dataType: 'json'
				});
			}
			return false;
		});
	})('#so_listing_tabs_229'); 

	(function (element) {
				var $element = $(element),
						$extraslider = $(".extraslider-inner", $element),
						_delay = 500,
						_duration = 800,
						_effect = 'none';

				$extraslider.on("initialized.owl.carousel2", function () {
					var $item_active = $(".owl2-item.active", $element);
					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					}
					else {
						var $item = $(".owl2-item", $element);
						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
					}
					
										$(".owl2-controls", $element).insertBefore($extraslider);
					$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
					
				});

				$extraslider.owlCarousel2({
					rtl: false,
					margin: 1,
					slideBy: 1,
					autoplay: 0,
					autoplayHoverPause: 0,
					autoplayTimeout: 0,
					autoplaySpeed: 1000,
					startPosition: 0,
					mouseDrag: 1,
					touchDrag: 1,
					autoWidth: false,
					responsive: {
						0: 	{ items: 1 } ,
						480: { items: 1 },
						768: { items: 1 },
						992: { items: 1 },
						1200: {items: 1}
					},
					dotClass: "owl2-dot",
					dotsClass: "owl2-dots",
					dots: false,
					dotsSpeed:500,
					nav: true,
					loop: false,
					navSpeed: 500,
					navText: ['',''],
					navClass: ["owl2-prev", "owl2-next"]

				});

				$extraslider.on("translate.owl.carousel2", function (e) {
					
					var $item_active = $(".owl2-item.active", $element);
					_UngetAnimate($item_active);
					_getAnimate($item_active);
				});

				$extraslider.on("translated.owl.carousel2", function (e) {

					
					var $item_active = $(".owl2-item.active", $element);
					var $item = $(".owl2-item", $element);

					_UngetAnimate($item);

					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					} else {

						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});

					}
				});

				function _getAnimate($el) {
					if (_effect == "none") return;
					//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
					$extraslider.removeClass("extra-animate");
					$el.each(function (i) {
						var $_el = $(this);
						$(this).css({
							"-webkit-animation": _effect + " " + _duration + "ms ease both",
							"-moz-animation": _effect + " " + _duration + "ms ease both",
							"-o-animation": _effect + " " + _duration + "ms ease both",
							"animation": _effect + " " + _duration + "ms ease both",
							"-webkit-animation-delay": +i * _delay + "ms",
							"-moz-animation-delay": +i * _delay + "ms",
							"-o-animation-delay": +i * _delay + "ms",
							"animation-delay": +i * _delay + "ms",
							"opacity": 1
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
							"animation": "",
							"-webkit-animation": "",
							"-moz-animation": "",
							"-o-animation": "",
							"opacity": 1
						});
					});
				}

			})("#sp_extra_slider_307481497095044");



	(function (element) {
				var $element = $(element),
						$extraslider = $(".extraslider-inner", $element),
						_delay = 500,
						_duration = 800,
						_effect = 'none';

				$extraslider.on("initialized.owl.carousel2", function () {
					var $item_active = $(".owl2-item.active", $element);
					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					}
					else {
						var $item = $(".owl2-item", $element);
						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
					}
					
										$(".owl2-controls", $element).insertBefore($extraslider);
					$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
					
				});

				$extraslider.owlCarousel2({
					rtl: false,
					margin: 1,
					slideBy: 1,
					autoplay: 0,
					autoplayHoverPause: 0,
					autoplayTimeout: 0,
					autoplaySpeed: 1000,
					startPosition: 0,
					mouseDrag: 1,
					touchDrag: 1,
					autoWidth: false,
					responsive: {
						0: 	{ items: 1 } ,
						480: { items: 1 },
						768: { items: 1 },
						992: { items: 1 },
						1200: {items: 1}
					},
					dotClass: "owl2-dot",
					dotsClass: "owl2-dots",
					dots: false,
					dotsSpeed:500,
					nav: true,
					loop: false,
					navSpeed: 500,
					navText: ['',''],
					navClass: ["owl2-prev", "owl2-next"]

				});

				$extraslider.on("translate.owl.carousel2", function (e) {
					
					var $item_active = $(".owl2-item.active", $element);
					_UngetAnimate($item_active);
					_getAnimate($item_active);
				});

				$extraslider.on("translated.owl.carousel2", function (e) {

					
					var $item_active = $(".owl2-item.active", $element);
					var $item = $(".owl2-item", $element);

					_UngetAnimate($item);

					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					} else {

						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});

					}
				});

				function _getAnimate($el) {
					if (_effect == "none") return;
					//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
					$extraslider.removeClass("extra-animate");
					$el.each(function (i) {
						var $_el = $(this);
						$(this).css({
							"-webkit-animation": _effect + " " + _duration + "ms ease both",
							"-moz-animation": _effect + " " + _duration + "ms ease both",
							"-o-animation": _effect + " " + _duration + "ms ease both",
							"animation": _effect + " " + _duration + "ms ease both",
							"-webkit-animation-delay": +i * _delay + "ms",
							"-moz-animation-delay": +i * _delay + "ms",
							"-o-animation-delay": +i * _delay + "ms",
							"animation-delay": +i * _delay + "ms",
							"opacity": 1
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
							"animation": "",
							"-webkit-animation": "",
							"-moz-animation": "",
							"-o-animation": "",
							"opacity": 1
						});
					});
				}

			})("#sp_extra_slider_235891497095044");

			(function (element) {
				var $element = $(element),
						$extraslider = $(".blog-external", $element),
						_delay = 500,
				_duration = 800,
				_effect = 'none';

				this_item = $extraslider.find('div.media');
				this_item.find('div.item:eq(0)').addClass('head-button');
				this_item.find('div.item:eq(0) .media-heading').addClass('head-item');
				this_item.find('div.item:eq(0) .media-left').addClass('so-block');
				this_item.find('div.item:eq(0) .media-content').addClass('so-block');
				$extraslider.on("initialized.owl.carousel2", function () {
					var $item_active = $(".owl2-item.active", $element);
					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					}
					else {
						var $item = $(".owl2-item", $element);
						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
					}
					
											$(".owl2-nav", $element).insertBefore($extraslider);
						$(".owl2-controls", $element).insertAfter($extraslider);
					
				});

				$extraslider.owlCarousel2({
					margin: 30,
				slideBy: 1,
				autoplay: false,
				autoplayHoverPause: false,
				autoplayTimeout: 0,
				autoplaySpeed: 1000,
				loop: true,
				startPosition: 0,
				mouseDrag: true,
				touchDrag: true,
				autoWidth: false,
						responsive: {
					0: 	{ items: 1 } ,
					480: { items: 2 },
					768: { items: 2 },
					992: { items: 3 },
					1200: {items: 3}
				},
				dotClass: "owl2-dot",
				dotsClass: "owl2-dots",
				dots: false,
				dotsSpeed:500,
				nav: true,
				loop: true,
				navSpeed: 500,
				navText: ["", ""],
				navClass: ["owl2-prev", "owl2-next"]

			});

			$extraslider.on("translate.owl.carousel2", function (e) {
				
				var $item_active = $(".owl2-item.active", $element);
				_UngetAnimate($item_active);
				_getAnimate($item_active);
			});

			$extraslider.on("translated.owl.carousel2", function (e) {

				
				var $item_active = $(".owl2-item.active", $element);
				var $item = $(".owl2-item", $element);

				_UngetAnimate($item);

				if ($item_active.length > 1 && _effect != "none") {
					_getAnimate($item_active);
				} else {

					$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});

				}
			});

			function _getAnimate($el) {
				if (_effect == "none") return;
				//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
				$extraslider.removeClass("extra-animate");
				$el.each(function (i) {
					var $_el = $(this);
					$(this).css({
						"-webkit-animation": _effect + " " + _duration + "ms ease both",
						"-moz-animation": _effect + " " + _duration + "ms ease both",
						"-o-animation": _effect + " " + _duration + "ms ease both",
						"animation": _effect + " " + _duration + "ms ease both",
						"-webkit-animation-delay": +i * _delay + "ms",
						"-moz-animation-delay": +i * _delay + "ms",
						"-o-animation-delay": +i * _delay + "ms",
						"animation-delay": +i * _delay + "ms",
						"opacity": 1
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
						"animation": "",
						"-webkit-animation": "",
						"-moz-animation": "",
						"-o-animation": "",
						"opacity": 1
					});
				});
			}

		})("#so_latest_blog_212_127941497095044");

});