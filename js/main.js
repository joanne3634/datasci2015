"use strict";function pieChart(){if(jQuery().easyPieChart&&jQuery.support.leadingWhitespace){var e=0,a=["#119ee7"];jQuery(".chart").each(function(){var t=jQuery(this).offset().top,r=jQuery(window).scrollTop();r+900>t&&jQuery(this).easyPieChart({barColor:a[e],trackColor:"#e4e4e4",scaleColor:!1,scaleLength:!1,lineCap:"butt",lineWidth:3,size:160,rotate:0,animate:3e3,onStep:function(e,a,t){jQuery(this.el).find(".percent").text(Math.round(t))}}),e++,e>=a.length&&(e=0)})}}jQuery(document).ready(function(){jQuery("form.contact-form").on("submit",function(e){e.preventDefault();var a=jQuery(this);jQuery(a).find("span.contact-form-respond").remove();for(var t=a.serializeArray(),r=t.length-1;r>=0;r--)t[r].value.length||a.find('[name="'+t[r].name+'"]').addClass("invalid").on("focus",function(){jQuery(this).removeClass("invalid")});if(!a.find("[name]").hasClass("invalid")){var i=a.serialize();jQuery.post("contact-form.php",i).done(function(e){jQuery(a).find('[type="submit"]').attr("disabled",!1).parent().append('<span class="contact-form-respond highlight">'+e+"</span>")}).fail(function(e){jQuery(a).find('[type="submit"]').attr("disabled",!1).parent().append('<span class="contact-form-respond highlight">Mail cannot be sent. You need PHP server to send mail.</span>')})}}),jQuery().superfish&&jQuery("ul.sf-menu").superfish({delay:300,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"fast",disableHI:!1,cssArrows:!0,autoArrows:!0}),jQuery("#toggle_mobile_menu, #mainmenu a").on("click",function(){jQuery("#header").toggleClass("mobile-active")}),jQuery().UItoTop&&jQuery().UItoTop({easingType:"easeOutQuart"}),jQuery().parallax&&(jQuery("#testimonials").parallax("50% 50%",.01),jQuery("#prices").parallax("50% 50%",.01),jQuery("#serv").parallax("50% 50%",.01)),jQuery().prettyPhoto&&jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({hook:"data-gal",theme:"facebook"}),jQuery().tooltip&&jQuery('[data-toggle="tooltip"]').tooltip(),jQuery().carousel&&jQuery(".carousel").carousel(),jQuery().owlCarousel&&jQuery("#testimonials-carousel").owlCarousel({navigation:!0,pagination:!1,items:3,autoPlay:3e3,addClassActive:!0,itemsDesktop:[1199,3],itemsDesktopSmall:[991,2],itemsTablet:[768,1],itemsMobile:[479,1]});var e=jQuery("#header").outerHeight(!0);jQuery().localScroll&&jQuery("#copyright").localScroll({target:"body",duration:900,easing:"easeInOutQuart",offset:0}),$(".target-link").css("margin-top",-e-90),$(".target-link").css("padding-top",e+90)}),jQuery(window).load(function(){pieChart();var e=Object.prototype.toString.call(window.HTMLElement).indexOf("Constructor")>0;e&&$("html").addClass("is-safari"),jQuery().flexslider&&jQuery("#mainslider .flexslider").flexslider({animation:"fade",useCSS:!0,controlNav:!0,directionNav:!1,prevText:"",nextText:"",smoothHeight:!1,slideshowSpeed:8e3,animationSpeed:300});var a=jQuery("#header"),t=0;jQuery(a).affix({offset:{top:t,bottom:0}}),jQuery(".preloaderimg").fadeOut(),jQuery(".preloader").delay(200).fadeOut("slow").delay(200,function(){jQuery(this).remove()}),jQuery("body").delay(1e3).scrollspy("refresh"),jQuery().appear&&(jQuery(".to_animate").appear().css({visibility:"hidden"}),jQuery(".to_animate").filter(":appeared").each(function(e){var a=jQuery(this),t=a.data("animation")?a.data("animation"):"fadeInUp",r=a.data("delay")?a.data("delay"):270;setTimeout(function(){a.addClass("animated "+t)},e*r)}),jQuery("body").on("appear",".to_animate",function(e,a){jQuery(a).each(function(e){var a=jQuery(this),t=a.data("animation")?a.data("animation"):"fadeInUp",r=a.data("delay")?a.data("delay"):270;setTimeout(function(){a.addClass("animated "+t)},e*r)})})),jQuery().appear&&(jQuery(".counter").appear(),jQuery(".counter").filter(":appeared").each(function(e){jQuery(this).hasClass("counted")||jQuery(this).countTo().addClass("counted")}),jQuery("body").on("appear",".counter",function(e,a){jQuery(a).each(function(e){jQuery(this).hasClass("counted")||jQuery(this).countTo().addClass("counted")})})),jQuery().jflickrfeed&&jQuery("#flickr").jflickrfeed({flickrbase:"http://api.flickr.com/services/feeds/",limit:9,qstrings:{id:"63512867@N07"},itemTemplate:'<a href="{{image_b}}" data-gal="prettyPhoto[pp_gal]"><li><img alt="{{title}}" src="{{image_s}}" /></li></a>'},function(e){jQuery("#flickr a").prettyPhoto({hook:"data-gal",theme:"facebook"}),jQuery("#flickr li").hover(function(){jQuery(this).find("img").stop().animate({opacity:.5},200)},function(){jQuery(this).find("img").stop().animate({opacity:1},400)})})}),jQuery(window).resize(function(){jQuery("body").scrollspy("refresh"),jQuery("#header_wrapper").css({height:jQuery("#header").outerHeight(!0)});var e=jQuery("#header").outerHeight(!0);$(".target-link").css("margin-top",-e-10),$(".target-link").css("padding-top",e+10)}),jQuery(window).scroll(function(){pieChart()});