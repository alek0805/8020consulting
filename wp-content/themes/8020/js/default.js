// JavaScript Document
$(document).ready(function(){
	//Main Nav
	$('#top-nav').onePageNav({
		currentClass: 'active',
		changeHash: true,
		scrollSpeed: 1200,
		easing: 'swing'
    });

	$('a.logo').click(function(){
		$.scrollTo($("#home"));
		$("#top-nav .active").removeClass("active");
	})

	//Contact Footer Link and Submit Resume Link
	$("footer p a").click(function(e){
		e.preventDefault();
		if ($(this).text() == "Contact us today." || $(this).text() == "contact us today."){
			$("#top-nav li:last a").click();
		}else{
			var window_height = $(window).height()-80;
			$.scrollTo($(this).parent().parent().offset().top-window_height, 1200);
			$("body").css("overflow", "hidden");
			$(".contact-bar-footer").css("z-index", 10012);
			$("#apply-overlay").css({display: "block"}).animate({opacity: "0.8"}, 500);
			$("#apply").css({display: "block"}).animate({opacity: 1, bottom: "80px"}, 1000);
		};
		return false;
	});
	
	$("#apply .close").click(function(e){
		e.preventDefault();
		$("#apply").animate({opacity: 0, bottom: "0"}, 500, function(){
			$(this).css({display: "none"});
		});
		$("#apply-overlay").animate({opacity: "0"}, 500,function(){
			$(this).css({display: "none"});
			$(".contact-bar-footer").css("z-index", "inherit");
			$("body").css("overflow", "auto");			
		});
		return false;
	});
	
	//Parallax Cicles Background
	$window = $(window);
	$('#circles-parallax').each(function(){
		var $bgobj = $(this); // assigning the object
		$(window).scroll(function() {
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			var coords = '50% '+ yPos + 'px';
			$bgobj.css({ backgroundPosition: coords });
		});
	});
	
	//Animate Top Logo
	var isVisible = false;
	$(window).scroll(function(){
	     var shouldBeVisible = $(window).scrollTop() >= 180;
	     var b_mobile = $(window).width() < 768;
	     if (shouldBeVisible && !isVisible && !b_mobile) {
	          isVisible = true;
	          $('header ul').animate({width: "1000px"});
			  $('header ul li:eq(4)').animate({marginLeft: "190px"});
			  $('a.logo').animate({top: "10px", opacity: "1"}).css({"pointer-events": "auto", "display": "block"});
	     } else if (isVisible && !shouldBeVisible || b_mobile) {
	          isVisible = false;
	          $('header ul').animate({width: "800px"});
			  $('header ul li:eq(4)').animate({marginLeft: "0"});
	          $('a.logo').animate({top: "0", opacity: "0"}).css({"pointer-events": "none", "display": "none"});
			  $("#top-nav .active").removeClass("active");
	    }
	});
	
	//Our Team
	$("#team-list").filterable();
	
	$("ul#team-list li").hover(function(){
		$(this).find(".ballon").animate({opacity: "1", top: "145px"}, 500);
	},function(){		
		$(this).find(".ballon").animate({opacity: "0", top: "100px"}, 100);
	});
	
	$(".detail .close").click(function(e){
		e.preventDefault();
		$("ul#team-list li.last").animate({marginBottom: "0"}, 1000);
		$(".detail").animate({opacity: "0", height: "0"}, 1000, function(){
			$(this).css({top: "0", display: "none"});
			$("ul#team-list li img").removeClass("gray").removeClass("selectedteam");
		}).removeClass("opened");	
		return false;
	});
	
	$("ul#team-list li a").on("click", function(e){
		e.preventDefault();		
		var li_item = $(this).parent("li");
		var li_position = li_item.position();
		$("ul#team-list li img").removeClass("gray").removeClass("selectedteam");
		$(this).find("img").addClass("selectedteam");
		$("ul#team-list li img").addClass("gray");
		if ($(".detail").hasClass("opened")){
			$(".detail").animate({opacity: "0", height: "0"}, 500, function(){
				$(this).css({top: "0", display: "none"}).removeClass("opened");
				$("ul#team-list li").css("margin-bottom", "0");
				$(".detail h3 span").html(li_item.find("h4").html());
				$(".detail .center div:first").html(li_item.find(".full_bio").html());				
				$("#big-profile-pic").attr("src", li_item.find(".full_bio").attr("rel"));
				var li_position = li_item.position();
				$(".detail").css({top: (li_position.top+460)+"px", display: "block"}).animate({opacity: "1", height: "274px"}).addClass("opened");					
			});						
		}else{
			$(".detail h3 span").html(li_item.find("h4").html());			
			$(".detail .center div:first").html(li_item.find(".full_bio").html());
			$("#big-profile-pic").attr("src", li_item.find(".full_bio").attr("rel"));			
			$(".detail").css({top: (li_position.top+460)+"px", display: "block"}).animate({opacity: "1", height: "274px"}).addClass("opened");
		};
		if (li_item.hasClass('last')){
			li_item.animate({marginBottom: "340px"}, 1000);			
		}else{
			li_item.nextAll("li.last:first").animate({marginBottom: "340px"}, 1000);
		};
		return false;
	});
	
	$("#cat-team-menu li:first a").click();	
	
	$("#team-list").jPaginate({items: 18, cookies: false, next: "&raquo;", previous: "&laquo;"});
	
	//Why Work Here
	$("ul.side.icons li:last").prev("li").css("margin-left", "85px");
	$("ul.side.icons li").hover(function(){
		$(this).find(".ballon").animate({opacity: "1", left: "-230px"}, 500);
	},function(){		
		$(this).find(".ballon").animate({opacity: "0", left: "-200px"}, 100);
	});
	
	//Fix Logo Position for smaller browser windows
	$(window).resize(function(){
		fix_logo_position();	
	});
	fix_logo_position();
	var get_current_width = $(window).width();
	var get_current_height = $(window).height();
	if (get_current_width < 767) {
		$('#why-work-here div.content div.green-bar h1').html('Work different<br> with us.');
		$('.navbar-collapse .navbar-nav').insertBefore('header');
		$('.navbar-nav').height(get_current_height + 20);
		$('ul.navbar-nav').hide();
		$('#our-team').insertAfter('#why-work-here');
		$('ul.navbar-nav').addClass('navbar-mobile-right');
		$('ul.navbar-nav').show();
		$('.all a>img').each(function(){
			$(this).attr('src', $(this).attr('src').replace('102x142', '456x314'));
		})
	}
	$('button.navbar-toggle').click(function(){
		if ($(this).hasClass('collapsed')) {
			$('#main').removeClass('main-mobile-right');	
			$('ul.navbar-nav').removeClass('navbar-mobile-right');
			$('#main').addClass('main-mobile-left');	
			$('ul.navbar-nav').addClass('navbar-mobile-left');
			$('header').css('transform','translateX(-150px)');
		}else{
			$('header').css('transform','translateX(0)');
			$('#main').removeClass('main-mobile-left');	
			$('ul.navbar-nav').removeClass('navbar-mobile-left');
			$('#main').addClass('main-mobile-right');		
			$('ul.navbar-nav').addClass('navbar-mobile-right');	
		}
	})

	//----------------------custom slider-------------------------
	var options = {
                $AutoPlay: false,

                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false

                $ArrowKeyNavigation: true,   			            //Allows arrow key to navigate or not
                $SlideWidth: 600,                                   //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                //$SlideHeight: 300,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                $SlideSpacing: 0, 					                //Space between each slide in pixels
                $DisplayPieces: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 100,                                //The offset position to park slide (this options applys only when slideshow disabled).

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 800));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
});

function fix_logo_position(){
	var get_current_width = $(window).width();
	/*if (get_current_width < 1000){
		$('a.logo').css({left: "472px"});	
	}else{*/
		$('a.logo').css({left: "50%"});	
	/*};*/
	if (get_current_width < 768) {
		$('a.logo').css({display: "none"});	
	};
}