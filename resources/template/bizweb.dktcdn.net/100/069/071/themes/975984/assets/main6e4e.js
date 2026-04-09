$(document).ready(function ($) {
	awe_backtotop();
	awe_lazyloadImage();
	awe_category();
	awe_menumobile();
});
$(window).on("load resize",function(e){	
	awe_resizeimage();
	awe_resizeimage();
	awe_owl();
	awe_blog();
});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})



function awe_lazyloadImage() {
	var ll = new LazyLoad({
		elements_selector: ".lazyload",
		load_delay: 500,
		threshold: 0
	});
} window.awe_lazyloadImage=awe_lazyloadImage;

/********************************************************
# SHOW NOITICE
********************************************************/
function awe_showNoitice(selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function() {
		$(selector).animate({right: '-300px'}, 500);
	}, 3500);
}  window.awe_showNoitice=awe_showNoitice;

/********************************************************
# SHOW LOADING
********************************************************/
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;

/********************************************************
# HIDE LOADING
********************************************************/
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;

/********************************************************
# SHOW POPUP
********************************************************/
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;

/********************************************************
# HIDE POPUP
********************************************************/
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;

/********************************************************
# CONVERT VIETNAMESE
********************************************************/
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
	str= str.replace(/đ/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;

/********************************************************
# RESIDE IMAGE PRODUCT BOX
********************************************************/
function awe_resizeimage() { 
	/*$('.product-box .product-thumbnail a img').each(function(){
		var t1 = (this.naturalHeight/this.naturalWidth);
		var t2 = ($(this).parent().height()/$(this).parent().width());
		if(t1<= t2){
			$(this).addClass('bethua');
		}
		var m1 = $(this).height();
		var m2 = $(this).parent().height();
		if(m1 <= m2){
			$(this).css('padding-top',(m2-m1)/2 + 'px');
		}
	})	*/
} window.awe_resizeimage=awe_resizeimage;

/********************************************************
# SIDEBAR CATEOGRY
********************************************************/
function awe_category(){
	$('.nav-category .fa-angle-down').click(function(e){
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;

/********************************************************
# MENU MOBILE
********************************************************/
function awe_menumobile(){
	$('.menu-baxxr').click(function(e){
		e.preventDefault();
		$('#menu-mobilexx').toggleClass('open');
	});
	$('#naxxv .fa').click(function(e){		
		e.preventDefault();
		$(this).parent().parent().toggleClass('open');
	});
} window.awe_menumobile=awe_menumobile;


$('.menu-bar').click(function(event){
	event.stopPropagation();
	$("#menu-mobile").slideToggle("fast");
});
$("#menu-mobile").on("click", function (event) {
	event.stopPropagation();
});

$('.ct-mb .mn-item .fa').click(function(){
	$(this).closest('li').find('>ul').slideToggle("fast");
});


$("span:contains('- 0 %')").text("-1%");

$('.footer-mid-menu .clicked').click(function(){
	var wDW = $(window).width();
	if(wDW <= 767){
		$(this).toggleClass('active');
		$(this).next('ul').slideToggle('300');
	} 
});



/********************************************************
# ACCORDION
********************************************************/
function awe_accordion(){
	$('.accordion .nav-link').click(function(e){
		e.preventDefault;
		$(this).parent().toggleClass('active');
	})
} window.awe_accordion=awe_accordion;

/********************************************************
# OWL CAROUSEL
********************************************************/
function awe_owl() { 
	$('.owl-carousel:not(.not-dqowl)').each( function(){
		var xs_item = $(this).attr('data-xs-items');
		var lg_item = $(this).attr('data-lg-items');
		var md_item = $(this).attr('data-md-items');
		var sm_item = $(this).attr('data-sm-items');	
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		var height=$(this).attr('data-height');
		if (typeof margin !== typeof undefined && margin !== false) {    
		} else{
			margin = 30;
		}
		if (typeof xs_item !== typeof undefined && xs_item !== false) {    
		} else{
			xs_item = 1;
		}
		if (typeof sm_item !== typeof undefined && sm_item !== false) {    

		} else{
			sm_item = 3;
		}	
		if (typeof md_item !== typeof undefined && md_item !== false) {    
		} else{
			md_item = 3;
		}
		if (typeof dot !== typeof undefined && dot !== true) {   
			dot= true;
		} else{
			dot = false;
		}
		$(this).owlCarousel({
			loop:false,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			nav:nav,
			autoHeight:height,
			responsive:{
				0:{
					items:Number(xs_item)				
				},
				768:{
					items:Number(sm_item)				
				},
				992:{
					items:Number(md_item)				
				},
				1200:{
					items:Number(lg_item)				
				}
			}
		})
	})
} window.awe_owl=awe_owl;


// Custom Navigation Events
$(".tz_slider_prev").click(function(){
	$(".tzblog-slider-content").trigger('owl.prev');
}) ;
$(".tz_slider_next").click(function(){
	$(".tzblog-slider-content").trigger('owl.next');
}) ;

// $ for flexslider------------------

$( ".show_nav_bar1" ).click(function() {
	$( ".show1" ).toggle( "slow", function() {
	});
});
$(".sub_minus").click(function(){
	$(this).next('.level0_415').toggle();      
});
$('.plazart-mainnav').css({'height':(($('.fix_height_mobile').height()))+'px'});
$('.header-search > button').on('click', function(){
	$( ".hiden_search" ).slideToggle();
});



function isAlphaNum(event) {
	var regex = new RegExp("^[a-zA-Z0-9\\s]+$");
	var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
	if (!regex.test(key)) {
		event.preventDefault();
		return false;
	}
}

$(window).load(function(){
	function mobile() {
		var checkWidth = document.body.clientWidth;		
		var demo = $(".owl-demo-grid");
		if (checkWidth > 767) {
			if(typeof demo.data('owlCarousel') != 'undefined') {
				demo.data('owlCarousel').destroy();
				demo.removeClass('owl-carousel');
			}
		} else if (checkWidth < 768) {
			demo.owlCarousel({
				items : 2,
				itemsDesktop : [1199,1],
				itemsDesktopSmall : [979,2],
				itemsTablet: [768, 2],
				itemsMobile: [600, 1],
			});
		}
	}

	$(document).ready(mobile);
	$(window).resize(mobile);
	//"use strict";


	if ( $('.parallax').length ) {
		$('.parallax').each(function(){
			$(this).parallax("30%", 0.1);
		});
	}

	$('.page-loader').remove();
});

$(document).ready(function(){

	"use strict";
	$( ".box_collection_mobile ul li a" ).click(function() {
		$( ".box_collection_mobile ul li" ).toggleClass( "show" );
	});
	$("#best-seller-slider .slider-items").owlCarousel({
		items: 1,
		itemsDesktop: [1024, 1],
		itemsDesktopSmall: [991, 1],
		itemsTablet: [600, 1],
		itemsMobile: [320, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		autoHeight: false,
		pagination: !1
	});
	/* featured-slider */
	$("#featured-slider .slider-items").owlCarousel({
		items: 4,
		itemsDesktop: [1024, 4],
		itemsDesktopSmall: [900, 3],
		itemsTablet: [600, 2],
		itemsMobile: [414, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		autoHeight: false,
		pagination: !1
	});


	/**
     *  Method For Slider Blog
     * -----------------------------------------------------------------------------
     */
	$(".tzblog-slider-content").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	/* Method for award slider */
	$(".tz-award-slider").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:true,
		autoHeight : false,
		navigation : false,
		paginationNumbers:true,
		itemsScaleUp:false
	});
	$("#author-slider .slider-items").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:true,
		autoHeight : false,
		navigation : false,
		paginationNumbers:true,
		itemsScaleUp:false
	});

	/* Method for simple slider */
	$(".tz-simple-product").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	// Custom Navigation Events
	$(".simple_prev").click(function(){
		$(".tz-simple-product").trigger('owl.prev');
	}) ;
	$(".simple_next").click(function(){
		$(".tz-simple-product").trigger('owl.next');
	}) ;

	/* Method for Partner slider */
	$(".partner-slider").owlCarousel({
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,3],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		navigation : true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		paginationNumbers:false,
		itemsScaleUp:false
	});
	$("#best-seller-slider .slider-items").owlCarousel({
		items: 2,
		itemsDesktop: [1024, 2],
		itemsDesktopSmall: [991, 3],
		itemsTablet: [767, 2],
		itemsMobile: [480, 1],
		navigation: !0,
		navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
		slideSpeed: 500,
		autoHeight: false,
		pagination: !1
	}),
		/* featured-slider */
		$("#featured-slider .slider-items").owlCarousel({
		items: 3,
		itemsDesktop: [1024, 3],
		itemsDesktopSmall: [900, 2],
		itemsTablet: [480, 1],
		itemsMobile: [414, 1],
		navigation: !0,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		slideSpeed: 500,
		autoHeight: false,
		pagination: !1
	});
	/* featured-slider 2*/
	$("#featured-slider-2 .slider-items").owlCarousel({
		items: 4,
		itemsDesktop: [1024, 4],
		itemsDesktopSmall: [992, 3],
		itemsTablet: [768, 2],
		itemsMobile: [414, 1],
		navigation: !0,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		slideSpeed: 500,
		autoHeight: false,
		pagination: !1
	});
	/* featured-slider 3 */
	$("#featured-slider-3 .slider-items").owlCarousel({
		items: 1,
		itemsDesktop: [1024, 1],
		itemsDesktopSmall: [992, 1],
		itemsTablet: [768, 1],
		itemsMobile: [414, 1],
		navigation: !0,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		slideSpeed: 500,
		autoHeight: true,
		pagination: !1
	});
	/* Method for Our Team */
	$(".tz-team-slider").owlCarousel({
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});

	/* Method for Quote */
	$(".tz-quote").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});

	/* Method for say */
	$(".tz-say-slider").owlCarousel({
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	// Custom Navigation Events
	$(".say_prev").click(function(){
		$(".tz-say-slider").trigger('owl.prev');
	}) ;
	$(".say_next").click(function(){
		$(".tz-say-slider").trigger('owl.next');
	}) ;
	// tab product
	$('.__MB_NEWS_TAB3 li a').click(function(){
		var getTabId		=		$(this).attr('id'); 							
		$('.__MB_CONTAINER_READ3').hide();							
		$('.__MB_NEWS_TAB3 li a,.__MB_NEWS_TAB3 li').removeClass('active');							
		$(this).addClass('active');	
		$(this).parent().addClass('active');								
		$('.__MB_CONTAINER_READ3_'+getTabId).show();							
	});
	// slide product
	var sync1 = $("#sync1");
	var sync2 = $("#sync2");

	sync1.owlCarousel({
		singleItem : true,
		slideSpeed : 1000,
		navigation: true,
		pagination:false,
		afterAction : syncPosition,
		responsiveRefreshRate : 200,
		autoHeight: false
	});

	sync2.owlCarousel({
		items : 5,
		itemsDesktop      : [1199,5],
		itemsDesktopSmall     : [979,5],
		itemsTablet       : [768,4],
		itemsMobile       : [479,3],
		pagination:false,
		responsiveRefreshRate : 100,
		afterInit : function(el){
			el.find(".owl-item").eq(0).addClass("synced");
		}
	});

	function syncPosition(el){
		var current = this.currentItem;
		$("#sync2")
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced")
		if($("#sync2").data("owlCarousel") !== undefined){
			center(current)
		}
	}

	$("#sync2").on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).data("owlItem");
		sync1.trigger("owl.goTo",number);
	});

	function center(number){
		var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for(var i in sync2visible){
			if(num === sync2visible[i]){
				var found = true;
			}
		}

		if(found===false){
			if(num>sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", num - sync2visible.length+2)
			}else{
				if(num - 1 === -1){
					num = 0;
				}
				sync2.trigger("owl.goTo", num);
			}
		} else if(num === sync2visible[sync2visible.length-1]){
			sync2.trigger("owl.goTo", sync2visible[1])
		} else if(num === sync2visible[0]){
			sync2.trigger("owl.goTo", num-1)
		}

	}
	/* Method for Header */
	var $_window =  $(window).width();
	if ( $_window >= 992 ) {
		var $_scrollTop  = '' ;
		$_scrollTop      = $(this).scrollTop();
		if ( $_scrollTop >= 30 ) {
			$('.tz-header2').addClass('tz-header-animation');
			$('.tz-header5').addClass('tz-header5-eff');

		}else{
			$('.tz-header2').removeClass('tz-header-animation');
			$('.tz-header5').removeClass('tz-header5-eff');
		}
		$(window).scroll(function(){
			var $_scrollTop  = '' ;
			$_scrollTop      = $(this).scrollTop();
			if ( $_scrollTop >= 30 ) {
				$('.tz-header2').addClass('tz-header-animation');


			}else{
				$('.tz-header2').removeClass('tz-header-animation');


			}

		});
	}

	/* Method for skill */
	if ( $('.chart').length > 0 ) {
		var $_elementTop =   $('.chart').offset().top;
		$(window).scroll(function(){
			var $_Top = $(window).scrollTop();
			if ( $_Top > $_elementTop - 600 ){
				$('.chart').easyPieChart({
					easing: 'easeOutBounce',
					scaleColor: false,
					size: 150,
					lineWidth: 5,
					trackColor: '#615950',
					barColor: '#f1805f',
					onStep: function(from, to, percent) {
						$(this.el).find('.percent').text(Math.round(percent));
					}
				});
				$('.tz-rotate-skill').css('opacity', 1);
			}
		});
	}

	/* Method for menu offcavas */
	var $true = true;
	$('.tz-offcavas').click(function(){
		if ( $true == true ){
			$('.tz-offcavans-menu').animate({
				left : '0'
			},300) ;
			$('.tzscrollable').addClass('tz-offcavans-menu-eff');
			$true = false;
		}else{
			$('.tz-offcavans-menu').animate({
				left : '-20em'
			},150,function(){
				$('.tzscrollable').removeClass('tz-offcavans-menu-eff');
			}) ;
			$true = true;
		}
	});
	$('.tz-offcanvas-close').click(function(){
		$('.tz-offcavans-menu').animate({
			left : '-20em'
		},150,function(){
			$('.tzscrollable').removeClass('tz-offcavans-menu-eff');
		}) ;
		$true = true;
	});

	/* Method for shop features slider */
	$(".features-slider").owlCarousel({
		items : 2,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	$(".features_prev").click(function(){
		$(".features-slider").trigger('owl.prev');
	}) ;
	$(".features_next").click(function(){
		$(".features-slider").trigger('owl.next');
	}) ;

	/* Method for shop sales slider */
	$(".sales-slider").owlCarousel({
		items : 2,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	$(".sales_prev").click(function(){
		$(".sales-slider").trigger('owl.prev');
	}) ;
	$(".sales_next").click(function(){
		$(".sales-slider").trigger('owl.next');
	}) ;

	/* Method for shop features 2 slider */
	$(".features-slider2").owlCarousel({
		items : 2,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	// Custom Navigation Events
	$(".features_prev2").click(function(){
		$(".features-slider2").trigger('owl.prev');
	}) ;
	$(".features_next2").click(function(){
		$(".features-slider2").trigger('owl.next');
	}) ;

	/* Method for shop sales 2 slider */
	$(".sales-slider2").owlCarousel({
		items : 2,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	$(".sales_prev2").click(function(){
		$(".sales-slider2").trigger('owl.prev');
	}) ;
	$(".sales_next2").click(function(){
		$(".sales-slider2").trigger('owl.next');
	}) ;

	/* Method for shop Tab */
	$('.tz-shop-tab').each(function(){
		$(this).find('.tzshop-content:first').show();
		$(this).find('.tz-shop-title small:first').addClass('tab-active');
	});
	$('.tz-shop-header .tz-shop-title small').click(function(){
		$(this).parent().find('small').removeClass('tab-active');
		$(this).addClass('tab-active');
		var $id = $(this).attr('data-option-value');
		$(this).parent().parent().parent().find('.tzshop-content').slideUp();
		$('#'+$id).slideDown();
	}) ;

	/* Method for Bestsellers */
	$(".tz-bestsellers-slider").owlCarousel({
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	$(".bestsellers_prev").click(function(){
		$(".tz-bestsellers-slider").trigger('owl.prev');
	}) ;
	$(".bestsellers_next").click(function(){
		$(".tz-bestsellers-slider").trigger('owl.next');
	}) ;

	/* Method for Love Word  */
	$(".tz-love-slider").owlCarousel({
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 2],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:true,
		paginationNumbers:false,
		itemsScaleUp:false
	});

	/* tz-love-words-slider */
	$(".tz-love-words-slider").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:true,
		paginationNumbers:false,
		itemsScaleUp:false
	});

	/* Method for video */
	$('.tzautoplay').click(function(){
		var $_this = $(this);
		var myVideo = $_this.parents('.tz-video').find('.videoID')[0];
		$(this).hide();
		$_this.parents('.tz-video').find('.tz-video-content h3').css('opacity',0);
		$_this.parents('.tz-video').find('.tz-video-content strong').css('opacity',0);
		$_this.parents('.tz-video').find('.bg-video').hide();
		$_this.parents('.tz-video').find('.tzpause').show().css('opacity',0);
		if (myVideo.paused)
			myVideo.play();

	}) ;
	$('.tzpause').click(function(){
		$(this).hide();
		var $_this = $(this);
		var myVideo = $_this.parents('.tz-video').find('.videoID')[0];
		$_this.parents('.tz-video').find('.tz-video-content h3').css('opacity',1);
		$_this.parents('.tz-video').find('.tz-video-content strong').css('opacity',1);
		$_this.parents('.tz-video').find('.bg-video').show();
		$_this.parents('.tz-video').find('.tzautoplay').show();
		if (myVideo.play)
			myVideo.pause();

	});

	/* Method for Search */
	$('.tz-search').click(function(){
		$('.tz-form-search').css('display','block');
		$('.tz-search-input').focus();
	}) ;
	$('.tz-form-close').click(function(){
		$('.tz-form-search').css('display','none');
	});

	/* Method for Single portfolio */
	$(".tz-slider-full").owlCarousel({
		items : 1,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});
	$(".tz_slider_prev").click(function(){
		$(".tz-slider-full").trigger('owl.prev');
	}) ;
	$(".tz_slider_next").click(function(){
		$(".tz-slider-full").trigger('owl.next');
	}) ;

	/* Method for Single portfolio gallery */
	$(".tz-gallery-full").owlCarousel({
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});

	/* Method for offfice */
	$(".tz-offfice-slider").owlCarousel({
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,2],
		itemsTablet: [768, 1],
		itemsMobile: [479, 1],
		slideSpeed:500,
		paginationSpeed:800,
		rewindSpeed:1000,
		autoPlay:false,
		stopOnHover: false,
		singleItem:false,
		rewindNav:false,
		pagination:false,
		paginationNumbers:false,
		itemsScaleUp:false
	});

	/* Accordion Toggle Items */
	var iconOpen = 'fa-chevron-down',
		iconClose = 'fa-chevron-right';

	$('.tzaccordion').each(function(){
		$(this).find('p:first').show();
		$(this).find('h6:first').addClass('active');
		$(this).find('h6:first i').addClass(iconOpen).removeClass(iconClose);
	});
	$('.tzaccordion h6').click(function() {
		var $_this = $(this);
		$_this.parent().find('.active i').addClass(iconClose).removeClass(iconOpen);
		$_this.parent().find('.active').removeClass('active');
		$_this.parent().find('p').slideUp('normal');
		if($(this).next('p').is(':hidden') == true) {
			$(this).find('i').addClass(iconOpen).removeClass(iconClose);
			$(this).addClass('active');
			$(this).next('p').slideDown('normal');
		}
	});



});



function awe_blog() { 
	$("#owl-blog-index").owlCarousel({
		navigation : false, // Show next and prev buttons
		paginationSpeed : 400,
		pagination : false,
		dots: false,
		autoplay:false,
		autoplayTimeout:4500,
		autoplayHoverPause:true,
		autoHeight: false,
		loop: true,
		margin: 30,
		responsive: {
			0: {
				items: 1
			},
			543: {
				items: 1
			},
			768: {
				items: 2
			},
			991: {
				items: 3
			},
			992: {
				items: 3
			},
			1300: {
				items: 3,
			},
			1590: {
				items: 3,
			}
		}
	});
} window.awe_blog=awe_blog;


/*ENDPRODUCT*/

/*Toggle class*/

$('.showsearchfromtop').click(function(event){
	$('.searchfromtop').slideToggle("fast");
});
$('.hidesearchfromtop').click(function(event){
	$('.searchfromtop').slideToggle("up");
});
$(this).on("click", function (event) {
	event.stopPropagation();
});


/*Menumobile*/
$('.btn-navbar').click(function(e){
	e.stopPropagation();
	$('.menu_mobile').toggleClass('open_sidebar_menu');
	$('.fix_height_mobile').toggleClass('margin-left-menu');
	$('.ops').toggleClass('o_show');
});
$('.ct-mobile li .fa').click(function() {
	$(this).closest('li').find('> .sub-menu').slideToggle("fast");
	$(this).closest('i').toggleClass('fa-angle-right fa-angle-down');
	return false;              
}); 
$('.ops').click(function(){
	$('.menu_mobile').removeClass('open_sidebar_menu');
	$('.fix_height_mobile').removeClass('margin-left-menu');
	$('.ops').removeClass('o_show');
});


$(document).ready(function(){
	var wDW = $(window).width();
	/*Footer*/

});
/*$(document).bind( "mouseup touchend", function(e){

	var menu_mobile = $('.menu_mobile');

	if (!menu_mobile.is(e.target) // if the target of the click isn't the container...
		&& menu_mobile.has(e.target).length === 0) // ... nor a descendant of the container
	{
		menu_mobile.removeClass('open_sidebar_menu');
	}

});*/
/*Endmenu*/

/********************************************************
# BACKTOTOP
********************************************************/
function awe_backtotop() { 
	if ($('.back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
} window.awe_backtotop=awe_backtotop;

/********************************************************
# Tab
********************************************************/
$(".e-tabs:not(.not-dqtab)").each( function(){
	$(this).find('.tabs-title li:first-child').addClass('current');
	$(this).find('.tab-content').first().addClass('current');

	$(this).find('.tabs-title li').click(function(){
		var tab_id = $(this).attr('data-tab');

		var url = $(this).attr('data-url');
		$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);

		$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
		$(this).closest('.e-tabs').find('.tab-content').removeClass('current');

		$(this).addClass('current');
		$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
	});    
});


/********************************************************
# DROPDOWN
********************************************************/
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$('body').click(function(event) {
	if (!$(event.target).closest('.dropdown').length) {
		$('.dropdown').removeClass('open');
	};
});

$('.open-filters').click(function(e){
	e.stopPropagation();
	$(this).toggleClass('openf');
	$('.dqdt-sidebar').toggleClass('openf');
	$('.opacity_sidebar').toggleClass('openf');
});
$('.opacity_sidebar').click(function(e){
	$('.opacity_sidebar').removeClass('openf');
	$('.dqdt-sidebar, .open-filters').removeClass('openf')
});