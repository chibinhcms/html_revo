jQuery(window).load(function($){
	$ = typeof($ !== 'funtion') ? jQuery : $;
		var obj_class 			= $('#content .row').find('.product-layout').parent(),
		product_arr_all 	= $(".so_filter_wrap .modcontent ul").attr("data-product_id"),
		opt_value_id		= "",
		att_value_id		= "",
		manu_value_id		= "",
		subcate_value_id	= "",
		$minPrice			= 34,
		$maxPrice 			= 96,
		$minPrice_new 		= 34,
		$maxPrice_new 		= 96,
		url 				= 'category_left.php';
		text_search			= "";
		obj_class.addClass('so-filter-gird');
	$load_gif = $('.so-filter-gird');
	$(".so-filter-heading").on("click",function(){
		if($(this).find(".fa").hasClass("fa-chevron-down")){
			$(this).find(".fa-chevron-down").addClass('fa-chevron-right','slow').removeClass('fa-chevron-down','slow');
		}else{
			$(this).find(".fa-chevron-right").addClass('fa-chevron-down','slow').removeClass('fa-chevron-right','slow');
		}
		$(this).parent().children(".so-filter-content-opts").slideToggle("slow");
	});

	clickOption();
	if( opt_value_id != "" || att_value_id != "" || manu_value_id != "" || $minPrice != $minPrice_new || $maxPrice != $maxPrice_new || text_search != "" || subcate_value_id != "")	{
		requestAjax();
	}else{
		obj_class.find(".product-layout").fadeIn("show");
	}

		function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}

		function updateURL() {
		if (history.pushState) {
			window.history.pushState({},'',url);
		}
	}

		function clickOption(){
		$(".so-filter-content-opts-container .opt-select.opt_enable").on("click",function(){
			if (!$(this).hasClass('opt_disable')){
				var type_li = $(this).attr("data-type");
				var att_value = "";
				var opt_value = "";
				var manu_value = "";
				$load_gif.addClass('loading-gif');
				switch(type_li)	{
					case "option":
						opt_value = $(this).attr("data-option_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(opt_value_id == ""){
								opt_value_id = opt_value;
							}else{
								opt_value_id += "," + opt_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							opt_value_id = opt_value_id.replace(","+opt_value,"");
							opt_value_id = opt_value_id.replace(opt_value+",","");
							opt_value_id = opt_value_id.replace(opt_value,"");
						}

						if(url.indexOf("opt_id") != -1)	{
							if(opt_value_id != ""){
								url = url.replace(/(&opt_id=)[^\&]+/,'&opt_id='+opt_value_id);
							}else{
								url = url.replace(/(&opt_id=)[^\&]+/,'');
								location.href= url;
							}

						}else{
							url = url+'&opt_id='+opt_value_id;
						}

					break;
					case "attribute":
						att_value = $(this).attr("data-attribute_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(att_value_id == ""){
								att_value_id = att_value;
							}else{
								att_value_id = att_value_id.replace(","+att_value,"");
								att_value_id = att_value_id.replace(att_value+",","");
								att_value_id = att_value_id.replace(att_value,"");
								att_value_id += "," + att_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							att_value_id = att_value_id.replace(","+att_value,"");
							att_value_id = att_value_id.replace(att_value+",","");
							att_value_id = att_value_id.replace(att_value,"");
						}
						if(url.indexOf("att_id") != -1){
							if(att_value_id != ""){
								url = url.replace(/(&att_id=)[^\&]+/,'&att_id='+att_value_id);
							}else{
								url = url.replace(/(&att_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&att_id='+att_value_id;
						}
					break;
					case "manufacturer":
						manu_value = $(this).attr("data-manufacturer_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(manu_value_id == "")	{
								manu_value_id = manu_value;
							}else{
								manu_value_id = manu_value_id.replace(","+manu_value,"");
								manu_value_id = manu_value_id.replace(manu_value+",","");
								manu_value_id = manu_value_id.replace(manu_value,"");
								manu_value_id += "," + manu_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							manu_value_id = manu_value_id.replace(","+manu_value,"");
							manu_value_id = manu_value_id.replace(manu_value+",","");
							manu_value_id = manu_value_id.replace(manu_value,"");
						}
						if(url.indexOf("manu_id") != -1){
							if(manu_value_id != "")	{
								url = url.replace(/(&manu_id=)[^\&]+/,'&manu_id='+manu_value_id);
							}else{
								url = url.replace(/(&manu_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&manu_id='+manu_value_id;
						}
					break;
					case "subcategory":
						subcate_value = $(this).attr("data-subcategory_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(subcate_value_id == ""){
								subcate_value_id = subcate_value;
							}else{
								subcate_value_id = subcate_value_id.replace(","+subcate_value,"");
								subcate_value_id = subcate_value_id.replace(subcate_value+",","");
								subcate_value_id = subcate_value_id.replace(subcate_value,"");
								subcate_value_id += "," + subcate_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							subcate_value_id = subcate_value_id.replace(","+subcate_value,"");
							subcate_value_id = subcate_value_id.replace(subcate_value+",","");
							subcate_value_id = subcate_value_id.replace(subcate_value,"");
						}
						if(url.indexOf("subcate_id") != -1)	{
							if(subcate_value_id != ""){
								url = url.replace(/(&subcate_id=)[^\&]+/,'&subcate_id='+subcate_value_id);
							}else{
								url = url.replace(/(&subcate_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&subcate_id='+subcate_value_id;
						}
						product_arr_all = $(this).attr("data-list_product");
						location.href= url;
					break;
				}
				obj_class.find(".product-layout").css("display","none");

				updateURL();
				requestAjax();
			}
			return false;
		});
	}

		function getCountProduct(){
		var product_arr = $(".so_filter_wrap .modcontent ul").attr("data-product_id");
		if(product_arr == ''){
			$('.so-filter-option').each(function(){
				$(this).find('.option-count span').html(0);
			});
		}else{
			$('.so-filter-option.opt-select').each(function(){
				var product = $(this).attr('data-list_product');
				if(product != ''){
					var product_array = product.split(',');
					var length = product_array.length;
					var count = 0;
					var dem = 0;
					for (var i = 0; i < length;i++){
						if(product_arr.indexOf(product_array[i]) != -1){
							count = count + 1;
							dem = product_array.length - product_arr.split(',').length;
						}
					}
					if(count == 0){
						$(this).removeClass("opt_enable").addClass("opt_disable");
						$(this).attr("disabled", "disabled");

					}else{
						$(this).removeClass("opt_enable").removeClass("opt_disable").addClass("opt_enable");
						$(this).removeAttr("disabled");
					}
					var type = $(this).attr("data-type");
					if(dem > 0 && ((att_value_id != "" && type == "attribute") || (opt_value_id != "" && type == "option"))){
						$(this).find('.option-count span').html("+"+dem);
					}else{
						$(this).find('.option-count span').html(count);
					}
				}
			});
		}
	}

			var range = document.getElementById('slider-range');
	noUiSlider.create(range, {
		start: [$minPrice_new, $maxPrice_new],
		step: 1,
		connect: true,
		range: {
			'min': $minPrice,
			'max': $maxPrice
		},
		slide: function(event, ui) {
            if ($minPrice == $maxPrice) {
                return false;
            }
        }
	});
	var valueMin = $('.content_min_max .input_min'),
		valueMax = $('.content_min_max .input_max');
		range.noUiSlider.on('change', function( values, handle ) {
			if ( handle ) {
				valueMax.val(values[handle]);
				$maxPrice_new = values[handle];
				if(url.indexOf("maxPrice") != -1){
					if($maxPrice_new != "96"){
						url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);
					}else{
						url = url.replace(/(&maxPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&maxPrice='+$maxPrice_new;
				}
			} else {
				valueMin.val(values[handle]);
				$minPrice_new = values[handle];
				if(url.indexOf("minPrice") != -1){
					if($minPrice_new != "34"){
						url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);
					}else{
						url = url.replace(/(&minPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&minPrice='+$minPrice_new;
				}
			}
			obj_class.find(".product-layout").css('display','none');
			updateURL();
			requestAjax();
		});
		
		range.noUiSlider.on('end', function( values, handle ) {
			if ( handle ) {
				$maxPrice_new = values[handle];
				$load_gif.addClass('loading-gif');
				if(url.indexOf("maxPrice") != -1){
					if($maxPrice_new != "96"){
						url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);
					}else{
						url = url.replace(/(&maxPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&maxPrice='+$maxPrice_new;
				}

			} else {
				$minPrice_new = values[handle];
				$load_gif.addClass('loading-gif');
				if(url.indexOf("minPrice") != -1){
					if($minPrice_new != "34"){
						url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);
					}else{
						url = url.replace(/(&minPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&minPrice='+$minPrice_new;
				}
			}
			obj_class.find(".product-layout").css('display','none');
			updateURL();
			requestAjax();
		});
		$('.content_min_max .input_min').change(function(){
		var valueMin = $(this).val();
		var maxPrice__ = getUrlVars()["maxPrice"];
		if(typeof maxPrice__ === 'undefined'){
			$maxPrice_new = 96;
		}else{
			$maxPrice_new = maxPrice__;
		}
		if(valueMin < 34){
			valueMin = 34;
			$(this).val(valueMin);
		}
		if(valueMin > 96){
			valueMin = 96;
			$(this).val(valueMin);
		}
		range.noUiSlider.set([valueMin,null]);
		if(url.indexOf("minPrice") != -1){
			if(valueMin != "34"){
				url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+valueMin);
			}else{
				url = url.replace(/(&minPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&minPrice='+valueMin;
		}
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		$minPrice_new = valueMin;
		requestAjax();
	});
	$('.content_min_max .input_max').change(function(){
		var valueMax = $(this).val();
		var minPrice__ = getUrlVars()["minPrice"];
		if(typeof minPrice__ === 'undefined'){
			$minPrice_new = 34;
		}else{
			$minPrice_new = minPrice__;
		}
		if(valueMax > 96){
			valueMax = 96;
			$(this).val(valueMax);
		}
		if(valueMax < 34){
			valueMax = 96;
			$(this).val(valueMax);
		}
		range.noUiSlider.set([null, valueMax]);
		if(url.indexOf("maxPrice") != -1){
			if(valueMax != "96"){
				url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+valueMax);
			}else{
				url = url.replace(/(&maxPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&maxPrice='+valueMax;
		}
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		$maxPrice_new = valueMax;
		requestAjax();
	});
				$('#text_search').keyup(function(){
		var character = 3;
		text_search = $("#text_search").val();
		if(text_search.length >= character){
			if(url.indexOf("search") != -1){
				if(text_search != ""){
					url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);
				}else{
					url = url.replace(/(&search=)[^\&]+/,'');
					location.href= url;
				}
			}else{
				url = url+'&search='+text_search;
			}
			obj_class.find(".product-layout").css('display','none');
			updateURL();
			requestAjax();
		}
	});
	$('#submit_text_search').on("click",function(){
		text_search = $("#text_search").val();
		if(url.indexOf("search") != -1){
			if(text_search != ""){
				url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);
			}else{
				url = url.replace(/(&search=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&search='+text_search;
		}
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		requestAjax();
	});
				$('#btn_resetAll').on("click",function(){
		opt_value_id 		= "";
		att_value_id 		= "";
		manu_value_id 		= "";
		$minPrice_new		= "",
		$maxPrice_new 		= "",
		text_search 		= "";
		subcate_value_id	= "";
		url = url.replace(/(&opt_id=)[^\&]+/,'');
		url = url.replace(/(&att_id=)[^\&]+/,'');
		url = url.replace(/(&manu_id=)[^\&]+/,'');
		url = url.replace(/(&minPrice=)[^\&]+/,'');
		url = url.replace(/(&maxPrice=)[^\&]+/,'');
		url = url.replace(/(&search=)[^\&]+/,'');
		url = url.replace(/(&subcate_id=)[^\&]+/,'');
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		$('.content_min_max .input_min').val($minPrice);
		$('.content_min_max .input_max').val($maxPrice);
		if(($minPrice != 0 || $maxPrice != 0) && ($minPrice != $maxPrice)){
			range.noUiSlider.set([$minPrice, $maxPrice]);
		}
		
		$(".so-filter-option").removeClass("opt_active");
		$(".so-filter-option").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
		$(".so-filter-option").find(".option-count").removeClass("opt_close");

		$(".so-filter-option-sub").removeClass("opt_active");
		$(".so-filter-option-sub").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
		$(".so-filter-option-sub").find(".option-count").removeClass("opt_close");

		$("#text_search").val('');
		location.href= url;
	});
			function requestAjax(){
		var page = (getUrlVars()["page"] === "undefined" ? "1" : getUrlVars()["page"]);
		$.ajax({
			type: 'POST',
			url: 'http://localhost/so_revo//index.php?route=extension/module/so_filter_shop_by/filter_data',
			data: {
				opt_value_id		: opt_value_id,
				att_value_id		: att_value_id,
				manu_value_id		: manu_value_id,
				subcate_value_id	: subcate_value_id,
				minPrice 			: $minPrice_new,
				maxPrice 			: $maxPrice_new,
				text_search 		: text_search,
				category_id_path	: '57',
				page				: page,
				product_arr_all 	: product_arr_all
			},
			success: function (data) {
				obj_class.html(data['html']);
				var text_right = obj_class.find(".product-layout").parent().next().find('.text-right').html();
				var text_left = obj_class.find(".product-layout").parent().next().find('.text-left').html();
				var text_center = obj_class.find(".product-layout").parent().next().find('.short-by-show.text-center').html();
				obj_class.next().find('.text-right').html(text_right);
				obj_class.next().find('.text-left').html('');
				obj_class.next().find('.short-by-show.text-center').html(text_center);
				obj_class.next().find('.box-pagination.text-right').html('');
				if(obj_class.find(".product-layout").length > 0){
					var html = obj_class.find(".product-layout").eq(0).parent().html();
					obj_class.html(html);

				}else{
					obj_class.html('<div class="col-xs-12">Not product</div>');
					obj_class.next().find('.text-right').css('display','none');
					obj_class.next().find('.short-by-show.text-center').css('display','none');
				}
				obj_class.find(".product-layout").fadeIn("show");
				$(".so_filter_wrap .modcontent ul").attr("data-product_id",data['product_arr']);
				$('#grid-view').click();
				getCountProduct();
				$load_gif.removeClass('loading-gif');
			},
			dataType: 'json'
		});
	}

});


//<![CDATA[
jQuery(window).load(function($){
	$ = typeof($ !== 'funtion') ? jQuery : $;
		var obj_class 			= $('#content .row').find('.product-layout').parent(),
		product_arr_all 	= $(".so_filter_wrap .modcontent ul").attr("data-product_id"),
		opt_value_id		= "",
		att_value_id		= "",
		manu_value_id		= "",
		subcate_value_id	= "",
		$minPrice			= 0,
		$maxPrice 			= 98,
		$minPrice_new 		= 0,
		$maxPrice_new 		= 98,
		url 				= 'category_full.php';
		text_search			= "";
		obj_class.addClass('so-filter-gird');
	$load_gif = $('.so-filter-gird');
	$(".so-filter-heading").on("click",function(){
		if($(this).find(".fa").hasClass("fa-chevron-down")){
			$(this).find(".fa-chevron-down").addClass('fa-chevron-right','slow').removeClass('fa-chevron-down','slow');
		}else{
			$(this).find(".fa-chevron-right").addClass('fa-chevron-down','slow').removeClass('fa-chevron-right','slow');
		}
		$(this).parent().children(".so-filter-content-opts").slideToggle("slow");
	});

	clickOption();
	if( opt_value_id != "" || att_value_id != "" || manu_value_id != "" || $minPrice != $minPrice_new || $maxPrice != $maxPrice_new || text_search != "" || subcate_value_id != "")	{
		requestAjax();
	}else{
		obj_class.find(".product-layout").fadeIn("show");
	}

		function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}

		function updateURL() {
		if (history.pushState) {
			window.history.pushState({},'',url);
		}
	}

		function clickOption(){
		$(".so-filter-content-opts-container .opt-select.opt_enable").on("click",function(){
			if (!$(this).hasClass('opt_disable')){
				var type_li = $(this).attr("data-type");
				var att_value = "";
				var opt_value = "";
				var manu_value = "";
				$load_gif.addClass('loading-gif');
				switch(type_li)	{
					case "option":
						opt_value = $(this).attr("data-option_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(opt_value_id == ""){
								opt_value_id = opt_value;
							}else{
								opt_value_id += "," + opt_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							opt_value_id = opt_value_id.replace(","+opt_value,"");
							opt_value_id = opt_value_id.replace(opt_value+",","");
							opt_value_id = opt_value_id.replace(opt_value,"");
						}

						if(url.indexOf("opt_id") != -1)	{
							if(opt_value_id != ""){
								url = url.replace(/(&opt_id=)[^\&]+/,'&opt_id='+opt_value_id);
							}else{
								url = url.replace(/(&opt_id=)[^\&]+/,'');
								location.href= url;
							}

						}else{
							url = url+'&opt_id='+opt_value_id;
						}

					break;
					case "attribute":
						att_value = $(this).attr("data-attribute_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(att_value_id == ""){
								att_value_id = att_value;
							}else{
								att_value_id = att_value_id.replace(","+att_value,"");
								att_value_id = att_value_id.replace(att_value+",","");
								att_value_id = att_value_id.replace(att_value,"");
								att_value_id += "," + att_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							att_value_id = att_value_id.replace(","+att_value,"");
							att_value_id = att_value_id.replace(att_value+",","");
							att_value_id = att_value_id.replace(att_value,"");
						}
						if(url.indexOf("att_id") != -1){
							if(att_value_id != ""){
								url = url.replace(/(&att_id=)[^\&]+/,'&att_id='+att_value_id);
							}else{
								url = url.replace(/(&att_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&att_id='+att_value_id;
						}
					break;
					case "manufacturer":
						manu_value = $(this).attr("data-manufacturer_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(manu_value_id == "")	{
								manu_value_id = manu_value;
							}else{
								manu_value_id = manu_value_id.replace(","+manu_value,"");
								manu_value_id = manu_value_id.replace(manu_value+",","");
								manu_value_id = manu_value_id.replace(manu_value,"");
								manu_value_id += "," + manu_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							manu_value_id = manu_value_id.replace(","+manu_value,"");
							manu_value_id = manu_value_id.replace(manu_value+",","");
							manu_value_id = manu_value_id.replace(manu_value,"");
						}
						if(url.indexOf("manu_id") != -1){
							if(manu_value_id != "")	{
								url = url.replace(/(&manu_id=)[^\&]+/,'&manu_id='+manu_value_id);
							}else{
								url = url.replace(/(&manu_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&manu_id='+manu_value_id;
						}
					break;
					case "subcategory":
						subcate_value = $(this).attr("data-subcategory_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(subcate_value_id == ""){
								subcate_value_id = subcate_value;
							}else{
								subcate_value_id = subcate_value_id.replace(","+subcate_value,"");
								subcate_value_id = subcate_value_id.replace(subcate_value+",","");
								subcate_value_id = subcate_value_id.replace(subcate_value,"");
								subcate_value_id += "," + subcate_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							subcate_value_id = subcate_value_id.replace(","+subcate_value,"");
							subcate_value_id = subcate_value_id.replace(subcate_value+",","");
							subcate_value_id = subcate_value_id.replace(subcate_value,"");
						}
						if(url.indexOf("subcate_id") != -1)	{
							if(subcate_value_id != ""){
								url = url.replace(/(&subcate_id=)[^\&]+/,'&subcate_id='+subcate_value_id);
							}else{
								url = url.replace(/(&subcate_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&subcate_id='+subcate_value_id;
						}
						product_arr_all = $(this).attr("data-list_product");
						location.href= url;
					break;
				}
				obj_class.find(".product-layout").css("display","none");

				updateURL();
				requestAjax();
			}
			return false;
		});
	}

		function getCountProduct(){
		var product_arr = $(".so_filter_wrap .modcontent ul").attr("data-product_id");
		if(product_arr == ''){
			$('.so-filter-option').each(function(){
				$(this).find('.option-count span').html(0);
			});
		}else{
			$('.so-filter-option.opt-select').each(function(){
				var product = $(this).attr('data-list_product');
				if(product != ''){
					var product_array = product.split(',');
					var length = product_array.length;
					var count = 0;
					var dem = 0;
					for (var i = 0; i < length;i++){
						if(product_arr.indexOf(product_array[i]) != -1){
							count = count + 1;
							dem = product_array.length - product_arr.split(',').length;
						}
					}
					if(count == 0){
						$(this).removeClass("opt_enable").addClass("opt_disable");
						$(this).attr("disabled", "disabled");

					}else{
						$(this).removeClass("opt_enable").removeClass("opt_disable").addClass("opt_enable");
						$(this).removeAttr("disabled");
					}
					var type = $(this).attr("data-type");
					if(dem > 0 && ((att_value_id != "" && type == "attribute") || (opt_value_id != "" && type == "option"))){
						$(this).find('.option-count span').html("+"+dem);
					}else{
						$(this).find('.option-count span').html(count);
					}
				}
			});
		}
	}

			var range = document.getElementById('slider-range');
	noUiSlider.create(range, {
		start: [$minPrice_new, $maxPrice_new],
		step: 1,
		connect: true,
		range: {
			'min': $minPrice,
			'max': $maxPrice
		},
		slide: function(event, ui) {
            if ($minPrice == $maxPrice) {
                return false;
            }
        }
	});
	var valueMin = $('.content_min_max .input_min'),
		valueMax = $('.content_min_max .input_max');
		range.noUiSlider.on('change', function( values, handle ) {
			if ( handle ) {
				valueMax.val(values[handle]);
				$maxPrice_new = values[handle];
				if(url.indexOf("maxPrice") != -1){
					if($maxPrice_new != "98"){
						url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);
					}else{
						url = url.replace(/(&maxPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&maxPrice='+$maxPrice_new;
				}
			} else {
				valueMin.val(values[handle]);
				$minPrice_new = values[handle];
				if(url.indexOf("minPrice") != -1){
					if($minPrice_new != "0"){
						url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);
					}else{
						url = url.replace(/(&minPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&minPrice='+$minPrice_new;
				}
			}
			obj_class.find(".product-layout").css('display','none');
			updateURL();
			requestAjax();
		});
		
		range.noUiSlider.on('end', function( values, handle ) {
			if ( handle ) {
				$maxPrice_new = values[handle];
				$load_gif.addClass('loading-gif');
				if(url.indexOf("maxPrice") != -1){
					if($maxPrice_new != "98"){
						url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);
					}else{
						url = url.replace(/(&maxPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&maxPrice='+$maxPrice_new;
				}

			} else {
				$minPrice_new = values[handle];
				$load_gif.addClass('loading-gif');
				if(url.indexOf("minPrice") != -1){
					if($minPrice_new != "0"){
						url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);
					}else{
						url = url.replace(/(&minPrice=)[^\&]+/,'');
						location.href= url;
					}
				}else{
					url = url+'&minPrice='+$minPrice_new;
				}
			}
			obj_class.find(".product-layout").css('display','none');
			updateURL();
			requestAjax();
		});
		$('.content_min_max .input_min').change(function(){
		var valueMin = $(this).val();
		var maxPrice__ = getUrlVars()["maxPrice"];
		if(typeof maxPrice__ === 'undefined'){
			$maxPrice_new = 98;
		}else{
			$maxPrice_new = maxPrice__;
		}
		if(valueMin < 0){
			valueMin = 0;
			$(this).val(valueMin);
		}
		if(valueMin > 98){
			valueMin = 98;
			$(this).val(valueMin);
		}
		range.noUiSlider.set([valueMin,null]);
		if(url.indexOf("minPrice") != -1){
			if(valueMin != "0"){
				url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+valueMin);
			}else{
				url = url.replace(/(&minPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&minPrice='+valueMin;
		}
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		$minPrice_new = valueMin;
		requestAjax();
	});
	$('.content_min_max .input_max').change(function(){
		var valueMax = $(this).val();
		var minPrice__ = getUrlVars()["minPrice"];
		if(typeof minPrice__ === 'undefined'){
			$minPrice_new = 0;
		}else{
			$minPrice_new = minPrice__;
		}
		if(valueMax > 98){
			valueMax = 98;
			$(this).val(valueMax);
		}
		if(valueMax < 0){
			valueMax = 98;
			$(this).val(valueMax);
		}
		range.noUiSlider.set([null, valueMax]);
		if(url.indexOf("maxPrice") != -1){
			if(valueMax != "98"){
				url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+valueMax);
			}else{
				url = url.replace(/(&maxPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&maxPrice='+valueMax;
		}
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		$maxPrice_new = valueMax;
		requestAjax();
	});
				$('#text_search').keyup(function(){
		var character = 3;
		text_search = $("#text_search").val();
		if(text_search.length >= character){
			if(url.indexOf("search") != -1){
				if(text_search != ""){
					url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);
				}else{
					url = url.replace(/(&search=)[^\&]+/,'');
					location.href= url;
				}
			}else{
				url = url+'&search='+text_search;
			}
			obj_class.find(".product-layout").css('display','none');
			updateURL();
			requestAjax();
		}
	});
	$('#submit_text_search').on("click",function(){
		text_search = $("#text_search").val();
		if(url.indexOf("search") != -1){
			if(text_search != ""){
				url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);
			}else{
				url = url.replace(/(&search=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&search='+text_search;
		}
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		requestAjax();
	});
				$('#btn_resetAll').on("click",function(){
		opt_value_id 		= "";
		att_value_id 		= "";
		manu_value_id 		= "";
		$minPrice_new		= "",
		$maxPrice_new 		= "",
		text_search 		= "";
		subcate_value_id	= "";
		url = url.replace(/(&opt_id=)[^\&]+/,'');
		url = url.replace(/(&att_id=)[^\&]+/,'');
		url = url.replace(/(&manu_id=)[^\&]+/,'');
		url = url.replace(/(&minPrice=)[^\&]+/,'');
		url = url.replace(/(&maxPrice=)[^\&]+/,'');
		url = url.replace(/(&search=)[^\&]+/,'');
		url = url.replace(/(&subcate_id=)[^\&]+/,'');
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		$('.content_min_max .input_min').val($minPrice);
		$('.content_min_max .input_max').val($maxPrice);
		if(($minPrice != 0 || $maxPrice != 0) && ($minPrice != $maxPrice)){
			range.noUiSlider.set([$minPrice, $maxPrice]);
		}
		
		$(".so-filter-option").removeClass("opt_active");
		$(".so-filter-option").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
		$(".so-filter-option").find(".option-count").removeClass("opt_close");

		$(".so-filter-option-sub").removeClass("opt_active");
		$(".so-filter-option-sub").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
		$(".so-filter-option-sub").find(".option-count").removeClass("opt_close");

		$("#text_search").val('');
		location.href= url;
	});
			function requestAjax(){
		var page = (getUrlVars()["page"] === "undefined" ? "1" : getUrlVars()["page"]);
		$.ajax({
			type: 'POST',
			url: 'http://opencart.opencartworks.com/themes/so_revo//index.php?route=extension/module/so_filter_shop_by/filter_data',
			data: {
				opt_value_id		: opt_value_id,
				att_value_id		: att_value_id,
				manu_value_id		: manu_value_id,
				subcate_value_id	: subcate_value_id,
				minPrice 			: $minPrice_new,
				maxPrice 			: $maxPrice_new,
				text_search 		: text_search,
				category_id_path	: '34',
				page				: page,
				product_arr_all 	: product_arr_all
			},
			success: function (data) {
				obj_class.html(data['html']);
				var text_right = obj_class.find(".product-layout").parent().next().find('.text-right').html();
				var text_left = obj_class.find(".product-layout").parent().next().find('.text-left').html();
				var text_center = obj_class.find(".product-layout").parent().next().find('.short-by-show.text-center').html();
				obj_class.next().find('.text-right').html(text_right);
				obj_class.next().find('.text-left').html('');
				obj_class.next().find('.short-by-show.text-center').html(text_center);
				obj_class.next().find('.box-pagination.text-right').html('');
				if(obj_class.find(".product-layout").length > 0){
					var html = obj_class.find(".product-layout").eq(0).parent().html();
					obj_class.html(html);

				}else{
					obj_class.html('<div class="col-xs-12">Not product</div>');
					obj_class.next().find('.text-right').css('display','none');
					obj_class.next().find('.short-by-show.text-center').css('display','none');
				}
				obj_class.find(".product-layout").fadeIn("show");
				$(".so_filter_wrap .modcontent ul").attr("data-product_id",data['product_arr']);
				$('#grid-view').click();
				getCountProduct();
				$load_gif.removeClass('loading-gif');
			},
			dataType: 'json'
		});
	}

});
//]]>

