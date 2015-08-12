/*!
 * 
 * Perfume eCommerce HTML5 Template v.1.0.0
 * 
 */


jQuery(function($){
	"use strict";

	$(window).load(function() {

		/*** preload animation ***/
		setTimeout(function(){
			$('body').addClass('loaded');
		}, 500);

		/*** newsletter script ***/
		setTimeout(function(){
			if ( $('.newsletter-holder').length ){
				$('body').addClass('newsletter-open');
			}
		}, 5000);

	});


	/*** dropBox functionality ***/
    
	$('.dropBox-btn').on('click', this, function() {
		
		$('.dropBox-btn').not(this).closest('li').removeClass('open');
		$(this).closest('li').toggleClass('open');
	});

    var $dropboxParent = $('.dropBox-btn').closest('li');

	$(document).mouseup(function (e){

	    if (!$dropboxParent.is(e.target) && $dropboxParent.has(e.target).length === 0){
	        $dropboxParent.removeClass('open');
	    }
	});

	$(document).keyup(function(e) {
        if (e.keyCode == 27) {
            $dropboxParent.removeClass('open');
        }
    });

	$('.dismiss-button').on('click', this, function(e) {
		$(this).closest('li').removeClass('open');
		e.preventDefault();
	});

	$('.main-nav li').has('ul').addClass('has-ul');
	$('.main-nav li.has-ul').prepend('<span class="menu-sibling"/>');


	$('.menu-sibling').on('click', this, function(){
		$(this).next('ul').toggle();
		$(this).closest('li').toggleClass('open');
	});

	$('.toggle-menu').on('click',this, function(){
		$(this).toggleClass('open');
	});

	$('.newsletter-cover').on('click', this, function(){
		$('body').removeClass('newsletter-open');
	});

	if ( $('.carousel-single').length) {
		
		$(".carousel-single").each(function() {

			var cSingle = $(this),
				trans = cSingle.data('trans'),
				autoplay = cSingle.data('autoplay'),
				caroNext = '.' + cSingle.data('btn-next'),
				caroPrev = '.' + cSingle.data('btn-prev');
		
			cSingle.owlCarousel({
				autoPlay: autoplay,
				singleItem: true,
				pagination: false,
				autoHeight : true,
				transitionStyle: trans
			});

			$(caroNext).on('click', this, function(){
				cSingle.trigger('owl.next');
				console.log('next');
			});
			$(caroPrev).on('click', this, function(){
				cSingle.trigger('owl.prev');
			});
			
		});

	}

	if ( $('.carousel-multiple').length) {
		var cMulti = $(".carousel-multiple");
	
		cMulti.owlCarousel({
			autoPlay: true,
			pagination: false,
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});

		$(".caro-next").on('click', this, function(){
			cMulti.trigger('owl.next');
		});
		$(".caro-prev").on('click', this, function(){
			cMulti.trigger('owl.prev');
		});
	}

	/*** select parent checkbox on checking child one ***/
    $('input.checkChild').on('change', this, function() {
        if ($(this).is(':checked')) {
            $(this).closest('ul').siblings('.checkbox').find('.checkParent').attr('checked', true);
        }
        else {
        	$(this).closest('ul').siblings('.checkbox').find('.checkParent').attr('checked', false);
        }
    });

	/*** convert tp-menu into select **/
/*	$("<select />").appendTo(".site-footer .container");
	
	$("<option />", {
		 "selected": "selected",
		 "value"   : "",
		 "text"    : "Categories"
	}).appendTo(".site-footer .container select");
	
	$(".footer-links li a").each(function() {
	 var el = $(this);
	 $("<option />", {
			 "value"   : el.attr("href"),
			 "text"    : el.text()
	 }).appendTo(".site-footer .container select");
	});
	
	$(".site-footer .container select").change(function() {
		window.location = $(this).find("option:selected").val();
	});*/ /*** convert tp-menu ends ***/


	/*** our team page tabs funcitonality ***/
	$('.team-boxes a').on('click', this, function(e) {
	  
	  var $this = $(this);

	  $this.tab('show');
	  $('.team-boxes a').not(this).removeClass('active');
	  $this.addClass('active');
	  e.preventDefault();
	});
	$('a.scroll-tab').on('click', this, function(e){
		var href = $(this).attr('href');
		$('html, body').animate({scrollTop: $(href).offset().top - 30}, 600);
		e.preventDefault();
	});

	/*** Accordion ***/
	if ( $('.accordion').length ) {
		$('.accordion').collapse();
	}

	$('.panel-collapse').on('show.bs.collapse',function(){
		$(this).prev('.panel-heading').addClass("active-heading");
	});
	
	$('.panel-collapse').on('hide.bs.collapse',function(){
		$(this).prev('.panel-heading').removeClass("active-heading");
	});

	/*** Breadcrumb dropdown and search ***/
	$('.breadcrumb-search .dropdown-menu a').on('focus', this, function(){
		 var txt = $(this).text();
		 $('.breadcrumb-search > a').text(txt).append(' <i class="caret"></i>');
		 $('.bar-form input[type="search"]').attr('placeholder', 'Search within ' + txt);
	});

	$('[data-toggle="popover"]').popover();

	$('input.trigger-other-shippment-info').change(function(){
		if ($(this).is(':checked')) {
			$('.other-shippment-info').slideDown('fast');
		}
		else {
			$('.other-shippment-info').slideUp('fast');
		}
	});

	$('[data-jump]').each(function() {

		$(this).on('click', function(){
			var jump = '#' + $(this).data('jump');
			$('html, body').animate({scrollTop: $(jump).offset().top - 10}, 600);
		});

	});

	// Filter tabs mixitup
	if ( $('.filter-list').length) {
		$('.filter-list').mixitup({
			layoutMode: 'grid',
			listClass: 'layout-list',
			gridClass: 'layout-grid',
			targetDisplayGrid: 'inline-block',
			targetDisplayList: 'block'
		});
	}

	if ( ! $('html').hasClass('ie-lt-10')){

		$('.filter-tabs').on('click', '.layout-list', function(){
			$('.filter-list').mixitup('toList');
			$('.filter-tabs .layout-grid').removeClass('active');
			$(this).addClass('active');
			
		});
	
		$('.filter-tabs').on('click', '.layout-grid', function(){
			$('.filter-list').mixitup('toGrid');
			$('.filter-tabs .layout-list').removeClass('active');
			$(this).addClass('active');
	
		});
		
	} else {

		$('.filter-tabs').on('click', '.layout-list', function(){
			$('.filter-tabs .layout-grid').removeClass('active');
			$('.filter-list').addClass('layout-list');	
			$('.filter-list').removeClass('layout-grid');	
			$(this).addClass('active');
			
		});
	
		$('.filter-tabs').on('click', '.layout-grid', function(){
			$('.filter-list').addClass('layout-grid');	
			$('.filter-list').removeClass('layout-list');	
			$('.filter-tabs .layout-list').removeClass('active');
			$(this).addClass('active');
		});
		
	}

	/*** Search List Filtering
	---------------------------------------------------------------------------***/

	$('[name="SearchProdList"]').keyup(function (e) {
	    var code = e.keyCode || e.which;
	    if (code == '9') return;
	    if (code == '27') $(this).val(null);
	    var $rows = $(this).closest('[name="filter-base"]').find('[name="filter-list"] li');
	    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
	    $rows.show().filter(function () {
	        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
	        return !~text.indexOf(val);
	    }).hide();
	});

	$('[name="clear-filter-list"]').on('click', this, function(){
		var $filterParent = $(this).closest('[name="filter-base"]');
		$filterParent.find('[name="filter-list"] li').show();
		$filterParent.find('[name="filter-list"] input[type="checkbox"]').attr('checked', false);
		$filterParent.find('[name="SearchProdList"]').val(null);
	});
	

	/*** jquery UI Slider
	----------------------------------------------------------------------- ***/
	
	if ( $( ".slider-element" ).length ) {
		$( ".slider-element" ).slider({
			range: true,
			min: 5,
			max: 1000,
			values: [ 75, 300 ],
			slide: function( event, ui ) {
				event = null;
				$( ".slide-min" ).text( "$" + ui.values[ 0 ] );
				$( ".slide-max" ).text( "$" + ui.values[ 1 ] );
			}
		});
		$( ".slide-min" ).text( "$" + $( ".slider-element" ).slider( "values", 0 ));
		$( ".slide-max" ).text( "$" + $( ".slider-element" ).slider( "values", 1 ));
	}


	/*** countdown timer ***/

	if ( $('.defaultCountdown').length ) {
		var countDay = new Date();
		//countDay = new Date(countDay.getFullYear() + 1, 1 - 1, 26);
		countDay = new Date(2015, 6-1, 25);
			$('.defaultCountdown').countdown({
			until: countDay
		});
	}

	/*-----------------------------
	Likelist
	-----------------------------*/
	var wow_themes = {			
			count: 0,
			wishlist: function(options, selector)
			{
				options.action = '_sh_ajax_callback';
				
				if( $(selector).data('_sh_add_to_wishlist') === true ){
					wow_themes.msg( 'You have already done this job', 'error' );
					return;
				}
				
				$(selector).data('_sh_add_to_wishlist', true );
				wow_themes.loading(true);
				
				$.ajax({
					url: ajaxurl,
					type: 'POST',
					data:options,
					dataType:"json",
					success: function(res){
						try{
							var newjason = res;
							if( newjason.code === 'fail'){
								$(selector).data('_sh_add_to_wishlist', false );
								wow_themes.loading(false);
								wow_themes.msg( newjason.msg, 'error' );
							}else if( newjason.code === 'exists'){
								$(selector).data('_sh_add_to_wishlist', true );
								wow_themes.loading(false);
								wow_themes.msg( newjason.msg, 'error' );
							}else if( newjason.code === 'success' ){
								wow_themes.loading(false);
								$(selector).data('_sh_add_to_wishlist', true );
								$(selector).children('span').text(newjason.value);
								wow_themes.msg( newjason.msg, 'success' );
							}else if( newjason.code === 'del' ){
								wow_themes.loading(false);
								$(selector).data('_sh_add_to_wishlist', true );
								$(selector).parents('tbody').remove();
								wow_themes.msg( newjason.msg, 'success' );
							}
							
							
						}
						catch(e){
							wow_themes.loading(false);
							$(selector).data('_sh_add_to_wishlist', false );
							wow_themes.msg( 'There was an error while adding product to whishlist '+e.message, 'error' );
							
						}
					}
				});
			},
			loading: function( show ){
				if( $('.ajax-loading' ).length === 0 ) {
					$('body').append('<div class="ajax-loading" style="display:none;"></div>');
				}
				
				if( show === true ){
					$('.ajax-loading').show('slow');
				}
				if( show === false ){
					$('.ajax-loading').hide('slow');
				}
			},
			
			msg: function( msg, type ){
				if( $('#pop' ).length === 0 ) {
					$('body').append('<div style="display: none;" id="pop"><div class="pop"><div class="alert"><p></p></div></div></div>');
				}
				if( type === 'error' ) {
					type = 'danger';
				}
				var alert_type = 'alert-' + type;
				
				$('#pop > .pop p').html( msg );
				$('#pop > .pop > .alert').addClass(alert_type);
				
				$('#pop').slideDown('slow').delay(5000).fadeOut('slow', function(){
					$('#pop .pop .alert').removeClass(alert_type);
				});
				
				
			},
			
		};
		
		$('.add_to_likelist').click(function(e) {

			e.preventDefault();
					
			var opt = {subaction:'like_it', data_id:$(this).attr('data-id')};
			wow_themes.wishlist( opt, this );
		
			
		});/**wishlist end*/

});

