<!DOCTYPE html>
<html>
<head>
<title>Revo - Multi-Purpose Responsive Theme</title>
<?php include("boxes/head.php"); ?>
</head>

<body class="common-home ltr res layout-1  ">
<div id="wrapper" class="wrapper-full banners-effect-1">   
	<?php include("boxes/header.php"); ?>
		
	
	<div id="socialLogin"></div>

                                    <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog block-popup-login">
                            <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
                            <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
                            <div class="block-content">
                                <div class=" col-reg registered-account">
                                    <div class="block-content">
                                        <form class="form form-login" action="http://localhost/so_revo/index.php?route=account/login" method="post" id="login-form">
                                            <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                                <div class="field email required email-input">
                                                    <div class="control">
                                                        <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address" />
                                                    </div>
                                                </div>
                                                <div class="field password required pass-input">
                                                    <div class="control">
                                                        <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password" />
                                                    </div>
                                                </div>
                                                                                                <div class=" form-group">
                                                    <label class="control-label">Login with your social account</label>
                                                    <div>
                                                                                                                                                                                    <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Flocalhost%2Fso_revo%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FGoogleLogin&client_id=68476649471-7a9u6khncknb8lrv8f8cjnubd0gf5d2q.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=force" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>
                                                                                                                                                                                                                                                                                                        <a href="https://www.facebook.com/dialog/oauth?client_id=1369816739757677&redirect_uri=http%3A%2F%2Flocalhost%2Fso_revo%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FFacebookLogin&state=46b0c8ac02aebceefde515e5331ce676&scope=email%2Cuser_birthday%2Cuser_location%2Cuser_hometown" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
                                                                                                                                                                                                                                                                                                        <a href="http://localhost/so_revo/index.php?route=extension/module/so_sociallogin/TwitterLogin" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
                                                                                                                                                                                                                                                                                                        <a href="http://localhost/so_revo/index.php?route=extension/module/so_sociallogin/LinkedinLogin" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
                                                                                                                                                                        </div>
                                                </div>
                                                                                                <div class="secondary ft-link-p"><a class="action remind" href="<b>Notice</b>: Undefined variable: forgotten in <b>D:\projects\so_revo\system\storage\modification\catalog\view\theme\so-revo\template\common\header.tpl</b> on line <b>283</b>"><span>Forgot Your Password?</span></a></div>
                                                <div class="actions-toolbar">
                                                    <div class="primary"><button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button></div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>      
                                <div class="col-reg login-customer">
                                    <h2>NEW HERE?</h2>
                            <p class="note-reg">Registration is free and easy!</p>
                            <ul class="list-log">
                                <li>Faster checkout</li>
                                <li>Save multiple shipping addresses</li>
                                <li>View and track orders and more</li>
                            </ul>                                    <a class="btn-reg-popup" title="Register" href="http://localhost/so_revo/index.php?route=account/register">Create an account</a>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            var $window = $(window);
                            function checkWidth() {
                                var windowsize = $window.width();
                                if (windowsize > 767) {
                                    $('a[href*="account/login"]').click(function (e) {
                                        e.preventDefault();
                                        $("#so_sociallogin").modal('show');
                                    });
                                }
                            }
                            checkWidth();
                            $(window).resize(checkWidth);
                        });
                    </script>
                            
<div id="content">
			<section id="slide-full1" class="section-style1 section-color">
				<div class= "container page-builder-ltr">
	<div class="row row_gnyv row-style ">
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_ihh9 col-md-offset-3 block-slide">
													<div class="row row_kqyf row-style ">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_qavo block-left">
													<div id="so-slideshow" class="module sohomepage-slider ">


<div class="modcontent">
		<div id="sohomepage-slider1">
		 <div class="so-homeslider sohomeslider-inner-1">
							<div class="item ">
					<a href="#" title="Slider 1-1" target="_blank">
						<img class="responsive" src="http://localhost/so_revo/image/cache/catalog/demo/slideshow/home1/slide1-650x510.jpg"  alt="Slider 1-1" />
					</a>
					<div class="sohomeslider-description">
												<span class="title-slider image-sl11 pos-left font-ct"> The Shopping List</span>

<div class="text pos-right text-sl11 font-ct">

<h3 class="tilte modtitle-sl11 ">5 Look We Love<br> This Month</h3>

<a class="des des-sl11" href="#"><i class="fa fa-caret-right"></i>see more</a>      

</div>     					</div>
				</div>
							<div class="item ">
					<a href="#" title="Slider 1-2" target="_blank">
						<img class="responsive" src="http://localhost/so_revo/image/cache/catalog/demo/slideshow/home1/slide2-650x510.jpg"  alt="Slider 1-2" />
					</a>
					<div class="sohomeslider-description">
												<div class="text pos-left text-sl12">
<a href="#" class="des des-sl11"><i class="fa fa-caret-right"></i>See More</a>   

</div>         					</div>
				</div>
							<div class="item ">
					<a href="#" title="Slider 1-3" target="_blank">
						<img class="responsive" src="http://localhost/so_revo/image/cache/catalog/demo/slideshow/home1/slide3-650x510.jpg"  alt="Slider 1-3" />
					</a>
					<div class="sohomeslider-description">
												<span class="title-slider image-sl11 pos-left font-ct"> Iphone 6 plus </span>

<div class="text pos-right text-sl11 font-ct">

<h3 class="tilte modtitle-sl11 ">5 Look We Love<br> This Month</h3>

<a class="des des-sl11" href="#"><i class="fa fa-caret-right"></i>see more</a>      

</div>      					</div>
				</div>
					</div>
		<script type="text/javascript">
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
	</script>
	</div>
	</div> <!--/.modcontent-->

  <div class="loader-mod-box"></div>
</div> <!--/.module-->
															</div> 		
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col_jztu block-right">
													<div class="module ">
    <div class="block-image-1">
	<ul class="static-image">
		<li><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/1.jpg" alt="Static Image"></a></li>
		<li><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/2.jpg" alt="Static Image"></a></li>
		<li><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/3.jpg" alt="Static Image"></a></li>
	</ul>
</div></div>															</div> 		
	</div>  											</div> 			
				
	</div> 	</div> 				</section> 	
			<div class= "container page-builder-ltr">
	<div class="row row_nfjd row-style ">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_e1py block block_1">
																<div class="block-categories module">
	<h3 class="modtitle"><span>Featured Categories</span></h3>
	<div class="cate-content">
		<div class="cate cate1">
			<div class="inner"><a href="#"><img src="image/catalog/demo/banners/home1/cate1.jpg" alt="Static Image"></a><a class="title-cate" href="#">Watches</a></div>
		</div>
		<div class="cate cate2">
		<div class="inner"><a href="#"><img src="image/catalog/demo/banners/home1/cate2.jpg" alt="Static Image"></a><a class="title-cate" href="#">Bags</a></div>
		</div>
		<div class="cate cate3">
		<div class="inner"><a href="#"><img src="image/catalog/demo/banners/home1/cate3.jpg" alt="Static Image"></a><a class="title-cate" href="#">Swimwears</a></div>
		</div>
		<div class="cate cate4">
		<div class="inner"><a href="#"><img src="image/catalog/demo/banners/home1/cate4.jpg" alt="Static Image"></a><a class="title-cate" href="#">Shoes</a></div>
		</div>
		<div class="cate cate5">
		<div class="inner"><a href="#"><img src="image/catalog/demo/banners/home1/cate5.jpg" alt="Static Image"></a><a class="title-cate" href="#">Fashion</a></div>
		</div>
	</div>
</div>																				</div> 			
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_hary col-style">
																<script>
//<![CDATA[
	var listdeal1 = [];
//]]>
</script>
<div class="module so-deals-ltr custom_deals_featured so-deals">
    	<h2 class="modtitle font-ct"><span>Today Deals</span></h2>
    		<div class="modcontent">
		    <div id="so_deals_138391496852143" class="so-deal modcontent products-list grid clearfix preset00-6 preset01-4 preset02-4 preset03-3 preset04-2 button-type1 style2">
				<div class="product-feature">
					<div class="item">
				<div class="product-thumb transition">
					<div class="box-label hidden">
													<span class="label label-sale">Sale</span>
																	</div>
					<div class="image">
					 
													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=32" target="_self">
																	<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/15-300x300.jpg" alt="Fuzan sumamipon" class="img-responsive">
															</a>
						 											</div>

					<div class="caption">
													<h4><a class="font-ct" href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=32" target="_self" title="Fuzan sumamipon" >Fuzan sumamipon</a></h4>
																		<div class="rating">
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				</div>
												
												<p class="des_deal">rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
												
												<p class="price font-ct">
														<span class="price-new">$45.00</span> <span class="price-old">$70.00</span>
																				</p>
												<div class="item-time font-ct">
							<div class="item-timer product_time_32"></div>
							<script type="text/javascript">
								//<![CDATA[
								listdeal1.push('product_time_32|2019/09/23 00:00:00');
								//]]>
							</script>
						</div>
					</div>
				</div>
			</div>
					<div class="item">
				<div class="product-thumb transition">
					<div class="box-label hidden">
													<span class="label label-sale">Sale</span>
																	</div>
					<div class="image">
					 
													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=74" target="_self">
																	<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/3-300x300.jpg" alt="Hamburger shoulder" class="img-responsive">
															</a>
						 											</div>

					<div class="caption">
													<h4><a class="font-ct" href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=74" target="_self" title="Hamburger shoulder" >Hamburger shoulder</a></h4>
																		<div class="rating">
																						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				</div>
												
												<p class="des_deal">rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
												
												<p class="price font-ct">
														<span class="price-new">$60.00</span> <span class="price-old">$71.00</span>
																				</p>
												<div class="item-time font-ct">
							<div class="item-timer product_time_74"></div>
							<script type="text/javascript">
								//<![CDATA[
								listdeal1.push('product_time_74|2017/08/31 00:00:00');
								//]]>
							</script>
						</div>
					</div>
				</div>
			</div>
				</div>
        		<div class="extraslider-inner default-nav" data-effect="none">
                                            <div class="item">
                                        <div class="product-thumb transition">
                        <div class="image">
															<span class="bt-sale">
								-29%									
								</span>
																													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" target="_self">
																			<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/11-300x300.jpg" alt="Drumsti tenderlo" class="img-responsive">
																	</a>
							                         </div>

                        <div class="caption">
                                                        <h4 class="font-ct"><a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" target="_self" title="Drumsti tenderlo" >Drumsti tenderlo</a></h4>
                                                                                    <p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
                            							                            <div class="rating">
                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                            </div>
							                                                        <p class="price">
                                                                <span class="price-new">$25.00</span> <span class="price-old">$35.00</span>
                                                                                            </p>
                                                        <div class="item-time">
                                <div class="item-timer product_time_68"></div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    listdeal1.push('product_time_68|2017/08/31 00:00:00');
                                    //]]>
                                </script>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                                            <div class="item">
                                        <div class="product-thumb transition">
                        <div class="image">
															<span class="bt-sale">
								-27%									
								</span>
																													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=94" target="_self">
																			<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/10-300x300.jpg" alt="Doner spareribs" class="img-responsive">
																	</a>
							                         </div>

                        <div class="caption">
                                                        <h4 class="font-ct"><a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=94" target="_self" title="Doner spareribs" >Doner spareribs</a></h4>
                                                                                    <p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
                            							                            <div class="rating">
                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                            </div>
							                                                        <p class="price">
                                                                <span class="price-new">$41.00</span> <span class="price-old">$56.00</span>
                                                                                            </p>
                                                        <div class="item-time">
                                <div class="item-timer product_time_94"></div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    listdeal1.push('product_time_94|2019/02/09 00:00:00');
                                    //]]>
                                </script>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                                            <div class="item">
                                        <div class="product-thumb transition">
                        <div class="image">
															<span class="bt-sale">
								-29%									
								</span>
																													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=58" target="_self">
																			<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/9-300x300.jpg" alt="Kenle masenitcute" class="img-responsive">
																	</a>
							                         </div>

                        <div class="caption">
                                                        <h4 class="font-ct"><a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=58" target="_self" title="Kenle masenitcute" >Kenle masenitcute</a></h4>
                                                                                    <p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
                            							                            <div class="rating">
                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                            </div>
							                                                        <p class="price">
                                                                <span class="price-new">$50.00</span> <span class="price-old">$70.00</span>
                                                                                            </p>
                                                        <div class="item-time">
                                <div class="item-timer product_time_58"></div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    listdeal1.push('product_time_58|2019/12/15 00:00:00');
                                    //]]>
                                </script>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                                            <div class="item">
                                        <div class="product-thumb transition">
                        <div class="image">
															<span class="bt-sale">
								-3%									
								</span>
																													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=31" target="_self">
																			<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/6-300x300.jpg" alt="Idest laborumdol" class="img-responsive">
																	</a>
							                         </div>

                        <div class="caption">
                                                        <h4 class="font-ct"><a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=31" target="_self" title="Idest laborumdol" >Idest laborumdol</a></h4>
                                                                                    <p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
                            							                            <div class="rating">
                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                            </div>
							                                                        <p class="price">
                                                                <span class="price-new">$78.00</span> <span class="price-old">$80.00</span>
                                                                                            </p>
                                                        <div class="item-time">
                                <div class="item-timer product_time_31"></div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    listdeal1.push('product_time_31|2019/09/03 00:00:00');
                                    //]]>
                                </script>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                                            <div class="item">
                                        <div class="product-thumb transition">
                        <div class="image">
															<span class="bt-sale">
								-33%									
								</span>
																													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=41" target="_self">
																			<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/1-300x300.jpg" alt="Dignissi ducimus" class="img-responsive">
																	</a>
							                         </div>

                        <div class="caption">
                                                        <h4 class="font-ct"><a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=41" target="_self" title="Dignissi ducimus" >Dignissi ducimus</a></h4>
                                                                                    <p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
                            							                            <div class="rating">
                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                            </div>
							                                                        <p class="price">
                                                                <span class="price-new">$67.00</span> <span class="price-old">$100.00</span>
                                                                                            </p>
                                                        <div class="item-time">
                                <div class="item-timer product_time_41"></div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    listdeal1.push('product_time_41|2019/08/11 00:00:00');
                                    //]]>
                                </script>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                                            <div class="item">
                                        <div class="product-thumb transition">
                        <div class="image">
															<span class="bt-sale">
								-66%									
								</span>
																													<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=36" target="_self">
																			<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/13-300x300.jpg" alt="Fbrum quidem" class="img-responsive">
																	</a>
							                         </div>

                        <div class="caption">
                                                        <h4 class="font-ct"><a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=36" target="_self" title="Fbrum quidem" >Fbrum quidem</a></h4>
                                                                                    <p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua...</p>
                            							                            <div class="rating">
                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                                									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                                            </div>
							                                                        <p class="price">
                                                                <span class="price-new">$34.00</span> <span class="price-old">$100.00</span>
                                                                                            </p>
                                                        <div class="item-time">
                                <div class="item-timer product_time_36"></div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    listdeal1.push('product_time_36|2019/08/18 00:00:00');
                                    //]]>
                                </script>
                            </div>
                        </div>
                                            </div>
                                    </div>
                                    </div>
    </div>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function ($) {  ;
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
	})('#so_deals_138391496852143');
	});
	//]]>
</script>
    
	</div><!--/.modcontent-->
	</div>
																				</div> 			
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_ympi col-style">
																<div class="moduletable module best-seller best-seller-custom fa-diamond fa-hidden ">
				<h3 class="modtitle"><span><i class="fa fa-diamond"></i> Best Sellers </span></h3>
						<div id="sp_extra_slider_180761496852143"
			 class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1 ">
			<!-- Begin extraslider-inner -->

			<div class="extraslider-inner" data-effect="none">
												<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" class="lt-image" target="_self"
										   title="Drumsti tenderlo"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/11-100x100.jpg" class="img-1" alt="Drumsti tenderlo">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/3-100x100.jpg" class="img-2" alt="Drumsti tenderlo">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" target="_self"
												   title="Drumsti tenderlo"  >
													Drumsti tenderlo												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																													<span class="old-price product-price">$25.00</span>&nbsp;&nbsp;
															<span class="price-old">$35.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=47" class="lt-image" target="_self"
										   title="Denouncing pleasure"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/20-100x100.jpg" class="img-1" alt="Denouncing pleasure">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/21-100x100.jpg" class="img-2" alt="Denouncing pleasure">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=47" target="_self"
												   title="Denouncing pleasure"  >
													Denouncing pleasure												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																													<span class="old-price product-price">$34.00</span>&nbsp;&nbsp;
															<span class="price-old">$100.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=36" class="lt-image" target="_self"
										   title="Fbrum quidem"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/13-100x100.jpg" class="img-1" alt="Fbrum quidem">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/9-100x100.jpg" class="img-2" alt="Fbrum quidem">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=36" target="_self"
												   title="Fbrum quidem"  >
													Fbrum quidem												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																													<span class="old-price product-price">$34.00</span>&nbsp;&nbsp;
															<span class="price-old">$100.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=72" class="lt-image" target="_self"
										   title="Boudin consequat"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/12-100x100.jpg" class="img-1" alt="Boudin consequat">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/7-100x100.jpg" class="img-2" alt="Boudin consequat">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=72" target="_self"
												   title="Boudin consequat"  >
													Boudin consequat												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																													<span class="old-price product-price">$40.00</span>&nbsp;&nbsp;
															<span class="price-old">$77.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
															<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=172" class="lt-image" target="_self"
										   title="Catlyn snake pilit"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/22-100x100.jpg" class="img-1" alt="Catlyn snake pilit">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/21-100x100.jpg" class="img-2" alt="Catlyn snake pilit">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=172" target="_self"
												   title="Catlyn snake pilit"  >
													Catlyn snake pilit												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																													<span class="old-price product-price">$41.00</span>&nbsp;&nbsp;
															<span class="price-old">$56.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=94" class="lt-image" target="_self"
										   title="Doner spareribs"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/10-100x100.jpg" class="img-1" alt="Doner spareribs">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/5-100x100.jpg" class="img-2" alt="Doner spareribs">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=94" target="_self"
												   title="Doner spareribs"  >
													Doner spareribs												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																													<span class="old-price product-price">$41.00</span>&nbsp;&nbsp;
															<span class="price-old">$56.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=156" class="lt-image" target="_self"
										   title="sed quia non nu"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/800/18-100x100.jpg" class="img-1" alt="sed quia non nu">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/800/20.1-100x100.jpg" class="img-2" alt="sed quia non nu">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=156" target="_self"
												   title="sed quia non nu"  >
													sed quia non nu												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																												<span class="price product-price">
															$42.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner media">
							<div class="media-left">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=157" class="lt-image" target="_self"
										   title="tatis et quasi"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/800/19-100x100.jpg" class="img-1" alt="tatis et quasi">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/800/12-100x100.jpg" class="img-2" alt="tatis et quasi">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="media-body">
									<div class="item-info">
																						<div class="rating">
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																									</div>
																																											<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=157" target="_self"
												   title="tatis et quasi"  >
													tatis et quasi												</a>
											</div>
																				
	
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="content_price">
																												<span class="price product-price">
															$44.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
							
		</div>
		<!--End extraslider-inner -->
	</div>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function ($) {
			;(function (element) {
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
					nav: false,
					loop: false,
					navSpeed: 500,
					navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
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

			})("#sp_extra_slider_180761496852143");
		});
		//]]>
	</script>
	

</div>

																				</div> 			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_on51 block block_2">
																<div class="h1-banner2">
	<div class="row banners">
		<div class="banner21 col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<a href="#">
				<img src="image/catalog/demo/banners/home1/4.jpg" alt="Image Client">
			</a>
		</div>
		<div class="banner21 col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<a href="#">
				<img src="image/catalog/demo/banners/home1/5.jpg" alt="Image Client">
			</a>
		</div>
	</div>
</div>																				</div> 			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_bag7 block block_3">
																<div class="module so-listing-tabs-ltr custom-listingtab default-nav">
			<div class="box-title font-ct">
			<h2 class="modtitle">Fashion</h2>
		</div>
			<div class="modcontent">
	<!--[if lt IE 9]>
	<div id="so_listing_tabs_213" class="so-listing-tabs msie lt-ie9 first-load module"><![endif]-->
	<!--[if IE 9]>
	<div id="so_listing_tabs_213" class="so-listing-tabs msie first-load module"><![endif]-->
	<!--[if gt IE 9]><!-->
	<div id="so_listing_tabs_213" class="so-listing-tabs first-load module"><!--<![endif]-->
						<div class="ltabs-wrap ">




			<div class="ltabs-tabs-container" data-delay="500"
				 data-duration="800"
				 data-effect="none"
				 data-ajaxurl="http://localhost/so_revo/" data-type_source="1"
				 data-type_show="slider" >
				 
				<!--Begin Tabs-->
					<div class="ltabs-tabs-wrap font-ct">
	<span class='ltabs-tab-selected'></span>
	<span class="ltabs-tab-arrow">▼</span>
	<ul class="ltabs-tabs cf list-sub-cat">
						<li class="ltabs-tab item-cate   tab-sel tab-loaded "
					data-category-id="sell"
					data-active-content-l=".items-category-sell"  >
					<span
						class="ltabs-tab-label">Best sellers					</span>
				</li>
							<li class="ltabs-tab item-cate  "
					data-category-id="p_date_added"
					data-active-content-l=".items-category-p_date_added"  >
					<span
						class="ltabs-tab-label">New Arrivals					</span>
				</li>
							<li class="ltabs-tab item-cate  "
					data-category-id="rating"
					data-active-content-l=".items-category-rating"  >
					<span
						class="ltabs-tab-label">Most Rating					</span>
				</li>
				</ul>
</div>
					
					
				<!-- End Tabs-->
			</div>
			<div class="wap-listing-tabs products-list grid">
									<div class="item-cat-image banners">
						<div>
							<a href="#" title="" target="_self" >
								<img class="categories-loadimage" title="" alt=""
									 src="http://localhost/so_revo/image/cache/catalog/demo/banners/home1/6-196x540.jpg"/>
							</a>
						</div>
					</div>
								<div class="ltabs-items-container"><!--Begin Items-->
								<div class="ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-sell" data-total="15">
							<div class="ltabs-items-inner  owl2-carousel  ltabs-slider ">
			
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='68' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-29%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" target="_self"
									   title="Drumsti tenderlo">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/11-180x180.jpg" class="img-1 img-responsive" alt="Drumsti tenderlo">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/3-180x180.jpg" class="img-2 img-responsive" alt="Drumsti tenderlo">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" 
										   title="Drumsti tenderlo" target="_self">
										   Drumsti tenderlo										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$25.00</span> <span class="price-old">$35.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('68');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('68');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('68');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='48' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=48" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=48" target="_self"
									   title="Faucibus rutrum">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/12-180x180.jpg" class="img-1 img-responsive" alt="Faucibus rutrum">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/14-180x180.jpg" class="img-2 img-responsive" alt="Faucibus rutrum">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=48" 
										   title="Faucibus rutrum" target="_self">
										   Faucibus rutrum										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$100.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('48');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='34' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=34" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=34" target="_self"
									   title="Fetiam interdum">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/14-180x180.jpg" class="img-1 img-responsive" alt="Fetiam interdum">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/14-180x180.jpg" class="img-2 img-responsive" alt="Fetiam interdum">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=34" 
										   title="Fetiam interdum" target="_self">
										   Fetiam interdum										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$100.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('34');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('34');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('34');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='32' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=32" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-36%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=32" target="_self"
									   title="Fuzan sumamipon">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/15-180x180.jpg" class="img-1 img-responsive" alt="Fuzan sumamipon">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/6-180x180.jpg" class="img-2 img-responsive" alt="Fuzan sumamipon">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=32" 
										   title="Fuzan sumamipon" target="_self">
										   Fuzan sumamipon										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$45.00</span> <span class="price-old">$70.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('32');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('32');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='43' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=43" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=43" target="_self"
									   title="Goken rumanitren">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/2-180x180.jpg" class="img-1 img-responsive" alt="Goken rumanitren">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/8-180x180.jpg" class="img-2 img-responsive" alt="Goken rumanitren">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=43" 
										   title="Goken rumanitren" target="_self">
										   Goken rumanitren										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$500.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('43');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='74' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=74" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-15%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=74" target="_self"
									   title="Hamburger shoulder">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/3-180x180.jpg" class="img-1 img-responsive" alt="Hamburger shoulder">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/15-180x180.jpg" class="img-2 img-responsive" alt="Hamburger shoulder">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=74" 
										   title="Hamburger shoulder" target="_self">
										   Hamburger shoulder										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$60.00</span> <span class="price-old">$71.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('74');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('74');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('74');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='45' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=45" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-33%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=45" target="_self"
									   title="Hazen dimapolan">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/4-180x180.jpg" class="img-1 img-responsive" alt="Hazen dimapolan">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/2-180x180.jpg" class="img-2 img-responsive" alt="Hazen dimapolan">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=45" 
										   title="Hazen dimapolan" target="_self">
										   Hazen dimapolan										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$67.00</span> <span class="price-old">$100.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('45');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('45');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='44' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=44" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-94%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=44" target="_self"
									   title="Hazen Zimalan">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/5-180x180.jpg" class="img-1 img-responsive" alt="Hazen Zimalan">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/4-180x180.jpg" class="img-2 img-responsive" alt="Hazen Zimalan">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=44" 
										   title="Hazen Zimalan" target="_self">
										   Hazen Zimalan										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$65.00</span> <span class="price-old">$1,000.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('44');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('44');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('44');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='31' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=31" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-3%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=31" target="_self"
									   title="Idest laborumdol">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/6-180x180.jpg" class="img-1 img-responsive" alt="Idest laborumdol">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/4-180x180.jpg" class="img-2 img-responsive" alt="Idest laborumdol">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=31" 
										   title="Idest laborumdol" target="_self">
										   Idest laborumdol										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$78.00</span> <span class="price-old">$80.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('31');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('31');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('31');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='77' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=77" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=77" target="_self"
									   title="Incididunt cowlabore">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/7-180x180.jpg" class="img-1 img-responsive" alt="Incididunt cowlabore">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/15-180x180.jpg" class="img-2 img-responsive" alt="Incididunt cowlabore">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=77" 
										   title="Incididunt cowlabore" target="_self">
										   Incididunt cowlabore										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$77.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('77');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('77');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('77');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='29' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=29" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=29" target="_self"
									   title="Indignation anddress">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/8-180x180.jpg" class="img-1 img-responsive" alt="Indignation anddress">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/13-180x180.jpg" class="img-2 img-responsive" alt="Indignation anddress">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=29" 
										   title="Indignation anddress" target="_self">
										   Indignation anddress										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$279.99 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('29');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('29');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('29');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='58' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=58" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-29%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=58" target="_self"
									   title="Kenle masenitcute">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/9-180x180.jpg" class="img-1 img-responsive" alt="Kenle masenitcute">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/15-180x180.jpg" class="img-2 img-responsive" alt="Kenle masenitcute">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=58" 
										   title="Kenle masenitcute" target="_self">
										   Kenle masenitcute										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$50.00</span> <span class="price-old">$70.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('58');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('58');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('58');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
					</div>
<script type="text/javascript">
	jQuery(document).ready(function($){
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
		
		
	});
</script>
									</div>
							<div class="ltabs-items  items-category-p_date_added" data-total="15">
											<div class="ltabs-loading"></div>
														</div>
							<div class="ltabs-items  items-category-rating" data-total="15">
											<div class="ltabs-loading"></div>
														</div>
						</div>
			</div>
			
		<!--End Items-->
		</div>
		<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function ($) {
	;
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
});
//]]>
</script>	</div>

	</div> <!-- /.modcontent-->
	</div>																					</div> 			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_8rbi block block_4">
																<div class="module so-listing-tabs-ltr custom-listingtab default-nav clearfix img-float">
			<div class="box-title font-ct">
			<h2 class="modtitle">Electronics</h2>
		</div>
			<div class="modcontent">
	<!--[if lt IE 9]>
	<div id="so_listing_tabs_222" class="so-listing-tabs msie lt-ie9 first-load module"><![endif]-->
	<!--[if IE 9]>
	<div id="so_listing_tabs_222" class="so-listing-tabs msie first-load module"><![endif]-->
	<!--[if gt IE 9]><!-->
	<div id="so_listing_tabs_222" class="so-listing-tabs first-load module"><!--<![endif]-->
						<div class="ltabs-wrap ">




			<div class="ltabs-tabs-container" data-delay="500"
				 data-duration="800"
				 data-effect="none"
				 data-ajaxurl="http://localhost/so_revo/" data-type_source="1"
				 data-type_show="slider" >
				 
				<!--Begin Tabs-->
					<div class="ltabs-tabs-wrap font-ct">
	<span class='ltabs-tab-selected'></span>
	<span class="ltabs-tab-arrow">▼</span>
	<ul class="ltabs-tabs cf list-sub-cat">
						<li class="ltabs-tab item-cate  "
					data-category-id="sell"
					data-active-content-l=".items-category-sell"  >
					<span
						class="ltabs-tab-label">Best sellers					</span>
				</li>
							<li class="ltabs-tab item-cate  "
					data-category-id="p_date_added"
					data-active-content-l=".items-category-p_date_added"  >
					<span
						class="ltabs-tab-label">New Arrivals					</span>
				</li>
							<li class="ltabs-tab item-cate   tab-sel tab-loaded "
					data-category-id="rating"
					data-active-content-l=".items-category-rating"  >
					<span
						class="ltabs-tab-label">Most Rating					</span>
				</li>
				</ul>
</div>
					
					
				<!-- End Tabs-->
			</div>
			<div class="wap-listing-tabs products-list grid">
									<div class="item-cat-image banners">
						<div>
							<a href="#" title="" target="_self" >
								<img class="categories-loadimage" title="" alt=""
									 src="http://localhost/so_revo/image/cache/catalog/demo/banners/home1/7-196x540.jpg"/>
							</a>
						</div>
					</div>
								<div class="ltabs-items-container"><!--Begin Items-->
								<div class="ltabs-items  items-category-sell" data-total="15">
											<div class="ltabs-loading"></div>
														</div>
							<div class="ltabs-items  items-category-p_date_added" data-total="15">
											<div class="ltabs-loading"></div>
														</div>
							<div class="ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-rating" data-total="15">
							<div class="ltabs-items-inner  owl2-carousel  ltabs-slider ">
			
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='165' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=165" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=165" target="_self"
									   title="Syndra oriana noal">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/8-180x180.jpg" class="img-1 img-responsive" alt="Syndra oriana noal">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/9-180x180.jpg" class="img-2 img-responsive" alt="Syndra oriana noal">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=165" 
										   title="Syndra oriana noal" target="_self">
										   Syndra oriana noal										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$219.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('165');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('165');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('165');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='167' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=167" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=167" target="_self"
									   title="Sokana bresaola">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/13-180x180.jpg" class="img-1 img-responsive" alt="Sokana bresaola">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/10-180x180.jpg" class="img-2 img-responsive" alt="Sokana bresaola">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=167" 
										   title="Sokana bresaola" target="_self">
										   Sokana bresaola										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$79.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('167');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('167');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('167');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='168' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=168" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=168" target="_self"
									   title="Nautilus bresaola">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/48-180x180.jpg" class="img-1 img-responsive" alt="Nautilus bresaola">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/47-180x180.jpg" class="img-2 img-responsive" alt="Nautilus bresaola">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=168" 
										   title="Nautilus bresaola" target="_self">
										   Nautilus bresaola										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$59.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('168');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('168');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('168');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='164' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=164" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=164" target="_self"
									   title="Leona sumertis">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/43-180x180.jpg" class="img-1 img-responsive" alt="Leona sumertis">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/45-180x180.jpg" class="img-2 img-responsive" alt="Leona sumertis">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=164" 
										   title="Leona sumertis" target="_self">
										   Leona sumertis										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$79.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('164');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('164');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('164');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='28' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=28" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-30%</span>
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=28" target="_self"
									   title="Deserunt mollitia">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/9-180x180.jpg" class="img-1 img-responsive" alt="Deserunt mollitia">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/50-180x180.jpg" class="img-2 img-responsive" alt="Deserunt mollitia">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=28" 
										   title="Deserunt mollitia" target="_self">
										   Deserunt mollitia										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$70.00</span> <span class="price-old">$100.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('28');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='79' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=79" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=79" target="_self"
									   title="Deserunt bresaola">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/15-180x180.jpg" class="img-1 img-responsive" alt="Deserunt bresaola">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/17-180x180.jpg" class="img-2 img-responsive" alt="Deserunt bresaola">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=79" 
										   title="Deserunt bresaola" target="_self">
										   Deserunt bresaola										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$89.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('79');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('79');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('79');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='47' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=47" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-66%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=47" target="_self"
									   title="Denouncing pleasure">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/20-180x180.jpg" class="img-1 img-responsive" alt="Denouncing pleasure">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/21-180x180.jpg" class="img-2 img-responsive" alt="Denouncing pleasure">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=47" 
										   title="Denouncing pleasure" target="_self">
										   Denouncing pleasure										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$34.00</span> <span class="price-old">$100.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('47');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='30' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=30" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=30" target="_self"
									   title="Dail mirentukan">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/30-180x180.jpg" class="img-1 img-responsive" alt="Dail mirentukan">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/27-180x180.jpg" class="img-2 img-responsive" alt="Dail mirentukan">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=30" 
										   title="Dail mirentukan" target="_self">
										   Dail mirentukan										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$100.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='55' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=55" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=55" target="_self"
									   title="Cuid densinteu">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/1-180x180.jpg" class="img-1 img-responsive" alt="Cuid densinteu">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/2-180x180.jpg" class="img-2 img-responsive" alt="Cuid densinteu">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=55" 
										   title="Cuid densinteu" target="_self">
										   Cuid densinteu										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$70.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('55');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('55');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('55');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='89' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=89" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=89" target="_self"
									   title="Cornedbeef turkeyse">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/37-180x180.jpg" class="img-1 img-responsive" alt="Cornedbeef turkeyse">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/38-180x180.jpg" class="img-2 img-responsive" alt="Cornedbeef turkeyse">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=89" 
										   title="Cornedbeef turkeyse" target="_self">
										   Cornedbeef turkeyse										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$99.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('89');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('89');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('89');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='64' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=64" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-10%</span>
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=64" target="_self"
									   title="Chicken kielbasa">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/48-180x180.jpg" class="img-1 img-responsive" alt="Chicken kielbasa">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/49-180x180.jpg" class="img-2 img-responsive" alt="Chicken kielbasa">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=64" 
										   title="Chicken kielbasa" target="_self">
										   Chicken kielbasa										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$71.00</span> <span class="price-old">$79.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('64');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('64');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('64');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='66' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=66" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-24%</span>
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=66" target="_self"
									   title="Capicola sausagops">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/2-180x180.jpg" class="img-1 img-responsive" alt="Capicola sausagops">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/3-180x180.jpg" class="img-2 img-responsive" alt="Capicola sausagops">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=66" 
										   title="Capicola sausagops" target="_self">
										   Capicola sausagops										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$50.00</span> <span class="price-old">$66.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('66');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('66');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('66');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
					</div>
<script type="text/javascript">
	jQuery(document).ready(function($){
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
		
		
	});
</script>
									</div>
						</div>
			</div>
			
		<!--End Items-->
		</div>
		<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function ($) {
	;
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
});
//]]>
</script>	</div>

	</div> <!-- /.modcontent-->
	</div>																					</div> 			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ps5y block block_5">
																<div class="module so-listing-tabs-ltr custom-listingtab default-nav clearfix bt-sp">
			<div class="box-title font-ct">
			<h2 class="modtitle">Sports</h2>
		</div>
			<div class="modcontent">
	<!--[if lt IE 9]>
	<div id="so_listing_tabs_229" class="so-listing-tabs msie lt-ie9 first-load module"><![endif]-->
	<!--[if IE 9]>
	<div id="so_listing_tabs_229" class="so-listing-tabs msie first-load module"><![endif]-->
	<!--[if gt IE 9]><!-->
	<div id="so_listing_tabs_229" class="so-listing-tabs first-load module"><!--<![endif]-->
						<div class="ltabs-wrap ">




			<div class="ltabs-tabs-container" data-delay="500"
				 data-duration="800"
				 data-effect="none"
				 data-ajaxurl="http://localhost/so_revo/" data-type_source="1"
				 data-type_show="slider" >
				 
				<!--Begin Tabs-->
					<div class="ltabs-tabs-wrap font-ct">
	<span class='ltabs-tab-selected'></span>
	<span class="ltabs-tab-arrow">▼</span>
	<ul class="ltabs-tabs cf list-sub-cat">
						<li class="ltabs-tab item-cate   tab-sel tab-loaded "
					data-category-id="sell"
					data-active-content-l=".items-category-sell"  >
					<span
						class="ltabs-tab-label">Best sellers					</span>
				</li>
							<li class="ltabs-tab item-cate  "
					data-category-id="p_date_added"
					data-active-content-l=".items-category-p_date_added"  >
					<span
						class="ltabs-tab-label">New Arrivals					</span>
				</li>
							<li class="ltabs-tab item-cate  "
					data-category-id="rating"
					data-active-content-l=".items-category-rating"  >
					<span
						class="ltabs-tab-label">Most Rating					</span>
				</li>
				</ul>
</div>
					
					
				<!-- End Tabs-->
			</div>
			<div class="wap-listing-tabs products-list grid">
									<div class="item-cat-image banners">
						<div>
							<a href="#" title="" target="_self" >
								<img class="categories-loadimage" title="" alt=""
									 src="http://localhost/so_revo/image/cache/catalog/demo/banners/home1/8-196x540.jpg"/>
							</a>
						</div>
					</div>
								<div class="ltabs-items-container"><!--Begin Items-->
								<div class="ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-sell" data-total="16">
							<div class="ltabs-items-inner  owl2-carousel  ltabs-slider ">
			
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='172' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=172" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-27%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=172" target="_self"
									   title="Catlyn snake pilit">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/22-180x180.jpg" class="img-1 img-responsive" alt="Catlyn snake pilit">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/21-180x180.jpg" class="img-2 img-responsive" alt="Catlyn snake pilit">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=172" 
										   title="Catlyn snake pilit" target="_self">
										   Catlyn snake pilit										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$41.00</span> <span class="price-old">$56.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('172');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('172');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('172');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='169' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=169" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=169" target="_self"
									   title="Fizz alan shankle">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/25-180x180.jpg" class="img-1 img-responsive" alt="Fizz alan shankle">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/27-180x180.jpg" class="img-2 img-responsive" alt="Fizz alan shankle">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=169" 
										   title="Fizz alan shankle" target="_self">
										   Fizz alan shankle										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$76.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('169');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('169');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('169');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='85' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=85" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=85" target="_self"
									   title="Kevinconsequat exercit">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/1-180x180.jpg" class="img-1 img-responsive" alt="Kevinconsequat exercit">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/5-180x180.jpg" class="img-2 img-responsive" alt="Kevinconsequat exercit">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=85" 
										   title="Kevinconsequat exercit" target="_self">
										   Kevinconsequat exerc..										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$88.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('85');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('85');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('85');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='60' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=60" target="_self"></a>
															<div class="box-label_skew">
																	<span class="label-product label-sale">-20%</span>
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=60" target="_self"
									   title="Lande sincutinste">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/2-180x180.jpg" class="img-1 img-responsive" alt="Lande sincutinste">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/6-180x180.jpg" class="img-2 img-responsive" alt="Lande sincutinste">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=60" 
										   title="Lande sincutinste" target="_self">
										   Lande sincutinste										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$70.00</span> <span class="price-old">$87.00</span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('60');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='63' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=63" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=63" target="_self"
									   title="Landjaeger shankle">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/19-180x180.jpg" class="img-1 img-responsive" alt="Landjaeger shankle">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/20-180x180.jpg" class="img-2 img-responsive" alt="Landjaeger shankle">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=63" 
										   title="Landjaeger shankle" target="_self">
										   Landjaeger shankle										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$70.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('63');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('63');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('63');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='170' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=170" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=170" target="_self"
									   title="Longzhu shankle">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/31-180x180.jpg" class="img-1 img-responsive" alt="Longzhu shankle">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/27-180x180.jpg" class="img-2 img-responsive" alt="Longzhu shankle">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=170" 
										   title="Longzhu shankle" target="_self">
										   Longzhu shankle										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$65.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('170');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('170');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('170');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='95' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=95" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=95" target="_self"
									   title="Magna boudinaute">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/5-180x180.jpg" class="img-1 img-responsive" alt="Magna boudinaute">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/3-180x180.jpg" class="img-2 img-responsive" alt="Magna boudinaute">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=95" 
										   title="Magna boudinaute" target="_self">
										   Magna boudinaute										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$98.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('95');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('95');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('95');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='62' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=62" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=62" target="_self"
									   title="Meatball brisketings">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/42-180x180.jpg" class="img-1 img-responsive" alt="Meatball brisketings">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/41-180x180.jpg" class="img-2 img-responsive" alt="Meatball brisketings">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=62" 
										   title="Meatball brisketings" target="_self">
										   Meatball brisketings										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$68.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('62');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('62');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('62');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='69' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=69" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=69" target="_self"
									   title="Minim commodo">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/35-180x180.jpg" class="img-1 img-responsive" alt="Minim commodo">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/36-180x180.jpg" class="img-2 img-responsive" alt="Minim commodo">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=69" 
										   title="Minim commodo" target="_self">
										   Minim commodo										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$88.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('69');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='52' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=52" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=52" target="_self"
									   title="Mobile processors">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/8-180x180.jpg" class="img-1 img-responsive" alt="Mobile processors">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/2-180x180.jpg" class="img-2 img-responsive" alt="Mobile processors">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=52" 
										   title="Mobile processors" target="_self">
										   Mobile processors										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$50.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('52');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('52');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('52');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
								
							<div class="ltabs-item ">
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='171' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=171" target="_self"></a>
															<div class="box-label_skew">
																								</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=171" target="_self"
									   title="Nami alan shankle">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/39-180x180.jpg" class="img-1 img-responsive" alt="Nami alan shankle">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/40-180x180.jpg" class="img-2 img-responsive" alt="Nami alan shankle">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=171" 
										   title="Nami alan shankle" target="_self">
										   Nami alan shankle										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$76.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('171');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('171');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('171');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
			
								
						
				<div class="item-inner product-thumb product-layout">
					<div class="product-item-container"> 
						<div class="left-block so-quickview">
							<a class="hidden" data-product='84' href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=84" target="_self"></a>
															<div class="box-label_skew">
																									<span class="label-product label-new">New</span>
																</div>
								<div class="product-image-container second_img  ">
									<a class="lt-image" 
									   href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=84" target="_self"
									   title="Pastrami frankfurter">
																					<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/9-180x180.jpg" class="img-1 img-responsive" alt="Pastrami frankfurter">
											<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Sport/9-180x180.jpg" class="img-2 img-responsive" alt="Pastrami frankfurter">
																			</a>
								</div>
													</div>
						
						<div class="right-block">
													<div class="caption">
																	<h4>
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=84" 
										   title="Pastrami frankfurter" target="_self">
										   Pastrami frankfurter										</a>
									</h4>
																																								<div class="price">
								  								  <span class="price-new">$70.00 </span>
								  								  								</div>
																
							</div>
																			<div class="button-group">
															<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('84');">Add to Cart</button>
							
															<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('84');"><i class="fa fa-heart"></i></button>
														
															<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('84');"><i class="fa fa-refresh"></i></button>
							
							</div>
												</div>

					</div>
				</div>
				
				</div>
			
					</div>
<script type="text/javascript">
	jQuery(document).ready(function($){
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
		
		
	});
</script>
									</div>
							<div class="ltabs-items  items-category-p_date_added" data-total="16">
											<div class="ltabs-loading"></div>
														</div>
							<div class="ltabs-items  items-category-rating" data-total="16">
											<div class="ltabs-loading"></div>
														</div>
						</div>
			</div>
			
		<!--End Items-->
		</div>
		<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function ($) {
	;
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
});
//]]>
</script>	</div>

	</div> <!-- /.modcontent-->
	</div>																					</div> 			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4jdv block block_6">
																<div class="banners">
<div>
   <a href="#">
     <img src="image/catalog/demo/banners/home1/9.jpg" alt="Image Client">
   </a>
</div>
</div>																				</div> 			
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col_5vsq block block_7">
																

<div class="moduletable module custom_bestseler default-nav">
				<h3 class="modtitle"><span><i class="fa fa-diamond"></i> Weekly Products </span></h3>
		
		<div id="sp_extra_slider_185971496852143"
			 class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1 ">
			<!-- Begin extraslider-inner -->
			<div class="image-slide">
													<div class="form-group">
						         <div class="banners"><div><a href="#" title="banner"><img src="image/catalog/demo/banners/home1/10.jpg" alt="banner"></a> </div>   </div>					</div>
							</div>
			<div class="extraslider-inner" data-effect="none">
												<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" class="lt-image" target="_self"
										   title="Drumsti tenderlo"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/11-90x90.jpg" class="img-1" alt="Drumsti tenderlo">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/3-90x90.jpg" class="img-2" alt="Drumsti tenderlo">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=68" target="_self"
												   title="Drumsti tenderlo"  >
													Drumsti tenderlo												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$25.00</span>&nbsp;&nbsp;
															<span class="price-old">$35.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=48" class="lt-image" target="_self"
										   title="Faucibus rutrum"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/12-90x90.jpg" class="img-1" alt="Faucibus rutrum">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/14-90x90.jpg" class="img-2" alt="Faucibus rutrum">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=48" target="_self"
												   title="Faucibus rutrum"  >
													Faucibus rutrum												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																												<span class="price product-price">
															$100.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=34" class="lt-image" target="_self"
										   title="Fetiam interdum"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/14-90x90.jpg" class="img-1" alt="Fetiam interdum">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/14-90x90.jpg" class="img-2" alt="Fetiam interdum">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=34" target="_self"
												   title="Fetiam interdum"  >
													Fetiam interdum												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																												<span class="price product-price">
															$100.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
															<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=32" class="lt-image" target="_self"
										   title="Fuzan sumamipon"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/15-90x90.jpg" class="img-1" alt="Fuzan sumamipon">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/6-90x90.jpg" class="img-2" alt="Fuzan sumamipon">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=32" target="_self"
												   title="Fuzan sumamipon"  >
													Fuzan sumamipon												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$45.00</span>&nbsp;&nbsp;
															<span class="price-old">$70.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=43" class="lt-image" target="_self"
										   title="Goken rumanitren"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/2-90x90.jpg" class="img-1" alt="Goken rumanitren">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/8-90x90.jpg" class="img-2" alt="Goken rumanitren">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=43" target="_self"
												   title="Goken rumanitren"  >
													Goken rumanitren												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																												<span class="price product-price">
															$500.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=74" class="lt-image" target="_self"
										   title="Hamburger shoulder"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/3-90x90.jpg" class="img-1" alt="Hamburger shoulder">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/15-90x90.jpg" class="img-2" alt="Hamburger shoulder">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=74" target="_self"
												   title="Hamburger shoulder"  >
													Hamburger shoulder												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$60.00</span>&nbsp;&nbsp;
															<span class="price-old">$71.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
															<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=45" class="lt-image" target="_self"
										   title="Hazen dimapolan"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/4-90x90.jpg" class="img-1" alt="Hazen dimapolan">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/2-90x90.jpg" class="img-2" alt="Hazen dimapolan">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=45" target="_self"
												   title="Hazen dimapolan"  >
													Hazen dimapolan												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$67.00</span>&nbsp;&nbsp;
															<span class="price-old">$100.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=44" class="lt-image" target="_self"
										   title="Hazen Zimalan"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/5-90x90.jpg" class="img-1" alt="Hazen Zimalan">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Fashion/4-90x90.jpg" class="img-2" alt="Hazen Zimalan">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=44" target="_self"
												   title="Hazen Zimalan"  >
													Hazen Zimalan												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$65.00</span>&nbsp;&nbsp;
															<span class="price-old">$1,000.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
							
		</div>
		<!--End extraslider-inner -->
	</div>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function ($) {
			;(function (element) {
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

			})("#sp_extra_slider_185971496852143");
		});
		//]]>
	</script>
	

</div>

																				</div> 			
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col_vnaa block block_8">
																

<div class="moduletable module custom_bestseler default-nav">
				<h3 class="modtitle"><span><i class="fa fa-diamond"></i> Featured Products </span></h3>
		
		<div id="sp_extra_slider_257221496852143"
			 class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1 ">
			<!-- Begin extraslider-inner -->
			<div class="image-slide">
													<div class="form-group">
						         <div class="banners"><div><a href="#" title="banner"><img src="image/catalog/demo/banners/home1/11.jpg" alt="banner"></a> </div>   </div>					</div>
							</div>
			<div class="extraslider-inner" data-effect="none">
												<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=70" class="lt-image" target="_self"
										   title=" Deserunt donerest"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/1-90x90.jpg" class="img-1" alt=" Deserunt donerest">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/3-90x90.jpg" class="img-2" alt=" Deserunt donerest">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=70" target="_self"
												   title=" Deserunt donerest"  >
													 Deserunt doner..												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																												<span class="price product-price">
															$96.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=72" class="lt-image" target="_self"
										   title="Boudin consequat"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/12-90x90.jpg" class="img-1" alt="Boudin consequat">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/7-90x90.jpg" class="img-2" alt="Boudin consequat">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=72" target="_self"
												   title="Boudin consequat"  >
													Boudin consequa..												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$40.00</span>&nbsp;&nbsp;
															<span class="price-old">$77.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=66" class="lt-image" target="_self"
										   title="Capicola sausagops"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/2-90x90.jpg" class="img-1" alt="Capicola sausagops">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic/3-90x90.jpg" class="img-2" alt="Capicola sausagops">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=66" target="_self"
												   title="Capicola sausagops"  >
													Capicola sausag..												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$50.00</span>&nbsp;&nbsp;
															<span class="price-old">$66.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
															<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=64" class="lt-image" target="_self"
										   title="Chicken kielbasa"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/48-90x90.jpg" class="img-1" alt="Chicken kielbasa">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/49-90x90.jpg" class="img-2" alt="Chicken kielbasa">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=64" target="_self"
												   title="Chicken kielbasa"  >
													Chicken kielbas..												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$71.00</span>&nbsp;&nbsp;
															<span class="price-old">$79.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=89" class="lt-image" target="_self"
										   title="Cornedbeef turkeyse"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/37-90x90.jpg" class="img-1" alt="Cornedbeef turkeyse">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/38-90x90.jpg" class="img-2" alt="Cornedbeef turkeyse">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=89" target="_self"
												   title="Cornedbeef turkeyse"  >
													Cornedbeef turk..												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																												<span class="price product-price">
															$99.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=55" class="lt-image" target="_self"
										   title="Cuid densinteu"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/1-90x90.jpg" class="img-1" alt="Cuid densinteu">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/2-90x90.jpg" class="img-2" alt="Cuid densinteu">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=55" target="_self"
												   title="Cuid densinteu"  >
													Cuid densinteu												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																												<span class="price product-price">
															$70.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
															<div class="item ">
										<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=30" class="lt-image" target="_self"
										   title="Dail mirentukan"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/30-90x90.jpg" class="img-1" alt="Dail mirentukan">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/27-90x90.jpg" class="img-2" alt="Dail mirentukan">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=30" target="_self"
												   title="Dail mirentukan"  >
													Dail mirentukan												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																												<span class="price product-price">
															$100.00														</span>
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
																<div class="item-wrap style1">
						<div class="item-wrap-inner">
							<div class="left-block">
								<div class="item-image">
									<div class="item-img-info">
									
										<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=47" class="lt-image" target="_self"
										   title="Denouncing pleasure"  >
																							<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/20-90x90.jpg" class="img-1" alt="Denouncing pleasure">
												<img src="http://localhost/so_revo/image/cache/catalog/demo/product/Electronic2/21-90x90.jpg" class="img-2" alt="Denouncing pleasure">
																					</a>
										
																			</div>
								</div>
							</div>
															<div class="right-block font-ct">
									<div class="item-info">
																					<div class="item-title">
												<a href="http://localhost/so_revo/index.php?route=product/product&amp;product_id=47" target="_self"
												   title="Denouncing pleasure"  >
													Denouncing plea..												</a>
											</div>
																				
	
																				
																					<!-- Begin item-content -->
											<div class="item-content">
													
																									<div  class="price">
																													<span class="old-price product-price">$34.00</span>&nbsp;&nbsp;
															<span class="price-old">$100.00</span>&nbsp;
																										
													</div>
													
													
													
											</div>
											<!-- End item-content -->
																			</div>
								</div><!-- End item-info -->
							
					</div>
					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
							
		</div>
		<!--End extraslider-inner -->
	</div>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function ($) {
			;(function (element) {
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

			})("#sp_extra_slider_257221496852143");
		});
		//]]>
	</script>
	

</div>

																				</div> 			
				
	</div> 	</div> 	
			<div class= "container page-builder-ltr">
	<div class="row row_lw4u row-style ">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_lzr8 block block_9">
																<div class="module so-latest-blog custom-ourblog clearfix default-nav">
	
			<h3 class="modtitle"><span>from our blog</span></h3>
		<div id="so_latest_blog_212_92591496852143" class="so-blog-external button-type2 button-type2">
				<div class="blog-external" data-effect="none">
												<div class="media">
									<div class="item">
		<div class="content-img">
		<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=11" target="_self">
			<img src="http://localhost/so_revo/image/cache/catalog/demo/blog/6-370x260.jpg" alt="Aestibulum ipsum a ornare car" class="media-object"/>
		</a>
		<div class="entry-date font-ct">
							<div class="day-time">24</div>
				<div class="month-time">Feb</div>
					</div>
	</div>
		<div class="content-detail">
		<div class="media-content">
						<h4 class="media-heading font-ct">
				<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=11" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
			</h4>
												<div class="media-subcontent">
									<span class="media-author"><i class="fa fa-book"></i>Admin</span>
													<span class="media-comment"><i class="fa fa-comments"></i>0 Comment</span>
													<span class="media-view"><i class="fa fa-eye"></i>1 View</span>
								</div>
								<div class="readmore">
					<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=11" target="_self" class="readmores"><i class="fa fa-caret-right"></i>Read more</a>
				</div>

									</div>
	</div>
</div>


									</div>
								

												<div class="media">
									<div class="item">
		<div class="content-img">
		<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=10" target="_self">
			<img src="http://localhost/so_revo/image/cache/catalog/demo/blog/8-370x260.jpg" alt="Aestibulum ipsum a ornare lectus" class="media-object"/>
		</a>
		<div class="entry-date font-ct">
							<div class="day-time">24</div>
				<div class="month-time">Feb</div>
					</div>
	</div>
		<div class="content-detail">
		<div class="media-content">
						<h4 class="media-heading font-ct">
				<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=10" title="Aestibulum ipsum a ornare lectus" target="_self">Aestibulum ipsum a ornare lectus</a>
			</h4>
												<div class="media-subcontent">
									<span class="media-author"><i class="fa fa-book"></i>Admin</span>
													<span class="media-comment"><i class="fa fa-comments"></i>0 Comment</span>
													<span class="media-view"><i class="fa fa-eye"></i>1 View</span>
								</div>
								<div class="readmore">
					<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=10" target="_self" class="readmores"><i class="fa fa-caret-right"></i>Read more</a>
				</div>

									</div>
	</div>
</div>


									</div>
								

												<div class="media">
									<div class="item">
		<div class="content-img">
		<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=2" target="_self">
			<img src="http://localhost/so_revo/image/cache/catalog/demo/blog/2-370x260.jpg" alt="Biten demonstraverunt lector " class="media-object"/>
		</a>
		<div class="entry-date font-ct">
							<div class="day-time">11</div>
				<div class="month-time">Apr</div>
					</div>
	</div>
		<div class="content-detail">
		<div class="media-content">
						<h4 class="media-heading font-ct">
				<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=2" title="Biten demonstraverunt lector " target="_self">Biten demonstraverunt lector </a>
			</h4>
												<div class="media-subcontent">
									<span class="media-author"><i class="fa fa-book"></i>Admin</span>
													<span class="media-comment"><i class="fa fa-comments"></i>0 Comment</span>
													<span class="media-view"><i class="fa fa-eye"></i>1 View</span>
								</div>
								<div class="readmore">
					<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=2" target="_self" class="readmores"><i class="fa fa-caret-right"></i>Read more</a>
				</div>

									</div>
	</div>
</div>


									</div>
								

												<div class="media">
									<div class="item">
		<div class="content-img">
		<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=3" target="_self">
			<img src="http://localhost/so_revo/image/cache/catalog/demo/blog/3-370x260.jpg" alt="Commodo laoreet semper" class="media-object"/>
		</a>
		<div class="entry-date font-ct">
							<div class="day-time">11</div>
				<div class="month-time">Apr</div>
					</div>
	</div>
		<div class="content-detail">
		<div class="media-content">
						<h4 class="media-heading font-ct">
				<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=3" title="Commodo laoreet semper" target="_self">Commodo laoreet semper</a>
			</h4>
												<div class="media-subcontent">
									<span class="media-author"><i class="fa fa-book"></i>Admin</span>
													<span class="media-comment"><i class="fa fa-comments"></i>5 Comments</span>
													<span class="media-view"><i class="fa fa-eye"></i>1 View</span>
								</div>
								<div class="readmore">
					<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=3" target="_self" class="readmores"><i class="fa fa-caret-right"></i>Read more</a>
				</div>

									</div>
	</div>
</div>


									</div>
								

												<div class="media">
									<div class="item">
		<div class="content-img">
		<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=14" target="_self">
			<img src="http://localhost/so_revo/image/cache/catalog/demo/blog/9-370x260.jpg" alt="Donec massa pellentesque placerat nisl laoreet placerat nisl	" class="media-object"/>
		</a>
		<div class="entry-date font-ct">
							<div class="day-time">31</div>
				<div class="month-time">Mar</div>
					</div>
	</div>
		<div class="content-detail">
		<div class="media-content">
						<h4 class="media-heading font-ct">
				<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=14" title="Donec massa pellentesque placerat nisl laoreet placerat nisl	" target="_self">Donec massa pellentesque placerat n..</a>
			</h4>
												<div class="media-subcontent">
									<span class="media-author"><i class="fa fa-book"></i>Admin</span>
													<span class="media-comment"><i class="fa fa-comments"></i>0 Comment</span>
													<span class="media-view"><i class="fa fa-eye"></i>1 View</span>
								</div>
								<div class="readmore">
					<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=14" target="_self" class="readmores"><i class="fa fa-caret-right"></i>Read more</a>
				</div>

									</div>
	</div>
</div>


									</div>
								

												<div class="media">
									<div class="item">
		<div class="content-img">
		<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=4" target="_self">
			<img src="http://localhost/so_revo/image/cache/catalog/demo/blog/4-370x260.jpg" alt="Donec tellus Nulla lorem" class="media-object"/>
		</a>
		<div class="entry-date font-ct">
							<div class="day-time">11</div>
				<div class="month-time">Apr</div>
					</div>
	</div>
		<div class="content-detail">
		<div class="media-content">
						<h4 class="media-heading font-ct">
				<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=4" title="Donec tellus Nulla lorem" target="_self">Donec tellus Nulla lorem</a>
			</h4>
												<div class="media-subcontent">
									<span class="media-author"><i class="fa fa-book"></i>Admin</span>
													<span class="media-comment"><i class="fa fa-comments"></i>2 Comments</span>
													<span class="media-view"><i class="fa fa-eye"></i>1 View</span>
								</div>
								<div class="readmore">
					<a href="http://localhost/so_revo/index.php?route=simple_blog/article/view&amp;simple_blog_article_id=4" target="_self" class="readmores"><i class="fa fa-caret-right"></i>Read more</a>
				</div>

									</div>
	</div>
</div>


									</div>
								

					</div>
			</div>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function ($) {
			;(function (element) {
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

		})("#so_latest_blog_212_92591496852143");
		});
		//]]>
	</script>

	
</div>																				</div> 			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_kdqy block block_10">
																<div id="content_slider_pw3t" class="yt-content-slider owl2-theme yt-content-slider-style-default arrow-default top-brand" data-transitionin="" data-transitionout="" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="6" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes"><div class="yt-content-slide yt-clearfix yt-content-wrap"> <a href="#" title="" target="brank"><img src="http://localhost/so_revo/image/catalog/demo/manufacturer/brand-1.png" alt="title_593826afea741124241496852143" /></a></div><div class="yt-content-slide yt-clearfix yt-content-wrap"> <a href="#" title="" target="brank"><img src="http://localhost/so_revo/image/catalog/demo/manufacturer/brand-2.png" alt="title_593826afea756189771496852143" /></a></div><div class="yt-content-slide yt-clearfix yt-content-wrap"> <a href="#" title="" target="brank"><img src="http://localhost/so_revo/image/catalog/demo/manufacturer/brand-3.png" alt="title_593826afea763200381496852143" /></a></div><div class="yt-content-slide yt-clearfix yt-content-wrap"> <a href="#" title="" target="brank"><img src="http://localhost/so_revo/image/catalog/demo/manufacturer/brand-4.png" alt="title_593826afea770225351496852143" /></a></div><div class="yt-content-slide yt-clearfix yt-content-wrap"> <a href="#" title="" target="brank"><img src="http://localhost/so_revo/image/catalog/demo/manufacturer/brand-5.png" alt="title_593826afea77d197641496852143" /></a></div><div class="yt-content-slide yt-clearfix yt-content-wrap"> <a href="#" title="" target="brank"><img src="http://localhost/so_revo/image/catalog/demo/manufacturer/brand-6.png" alt="title_593826afea789264611496852143" /></a></div><div class="yt-content-slide yt-clearfix yt-content-wrap"> <a href="#" title="" target="brank"><img src="http://localhost/so_revo/image/catalog/demo/manufacturer/brand-3.png" alt="title_593826afea79622581496852143" /></a></div></div>																				</div> 			
				
	</div> 	</div> 	
	 

<script type="text/javascript">
	
	function _SoQuickView(){
		
		var $item_class = $('.so-quickview');
		if ($item_class.length > 0) {
			for (var i = 0; i < $item_class.length; i++) {
				if($($item_class[i]).find('.quickview_handler').length <= 0){
					var $product_id = $($item_class[i]).find('a', $(this)).attr('data-product');
					if($.isNumeric($product_id) ){
												var _quickviewbutton = "<a class='quickview iframe-link visible-lg btn-button' href='http://localhost/so_revo/index.php?route=extension/soconfig/quickview&amp;product_id="+$product_id+"' title=\"Quick View\" data-toggle=\"tooltip\" data-title =\"Quick View\" data-fancybox-type=\"iframe\" ><i class=\"fa fa-search\"></i></a>";
												if($($item_class[i]).find('a.quickview').length <= 0){
						 $($item_class[i]).find('a.hidden').after(_quickviewbutton);
						}
					}
				}
			}
		}
		
	}
	jQuery(document).ready(function ($) {
		_SoQuickView();
		// Hide tooltip when clicking on it
		var hasTooltip = $("[data-toggle='tooltip']").tooltip({container: 'body'});
		hasTooltip.on('click', function () {
				$(this).tooltip('hide')
		});
	});
</script>	</div>		
	
		
	<?php include("boxes/footer.php"); ?>
    </div>
</body>
</html>