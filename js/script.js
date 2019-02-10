jQuery(document).ready(function() {
    "use strict";

    /*=================== Sidemenu ===================*/
    $(".open-sidemenu").on("click",function(){
        $(".sidemenu").addClass("slidein");
        return false;
    });
    $(".close-sidemenu, html").on("click",function(){
        $(".sidemenu").removeClass("slidein");
    });
    $(".open-sidemenu,.sidemenu").on("click",function(e){
        e.stopPropagation();
    });

    $(".sidemenu ul ul").parent().addClass("menu-item-has-children");
    $(".sidemenu ul li.menu-item-has-children > a").on("click",function(){
        $(this).parent().toggleClass("active").siblings().removeClass("active");
        $(this).next("ul").slideToggle();
        $(this).parent().siblings().find("ul").slideUp();
        return false;
    });


    /* =============== Smooth Scrolling On Back To Top Button ===================== */
    $(function() {
      $('a[href*=#]:not([href=#])').on("click",function(){
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 2000);
          }
        }
      });
    });



	/*=================== Search ===================*/
    $(".search a").on("click",function(){
    	$(this).next("form").toggleClass("active");
    	return false;
    });


    /*=================== Accordion ===================*/
    $(".toggle").each(function(){
        $(this).find('.content').hide();
        $(this).find('h3').on("click", function() {
            if ($(this).next().is(':hidden')) {
                $(this).parent().parent().find("h3").removeClass('active').next().slideUp(500).parent().removeClass("activate");
                $(this).toggleClass('active').next().slideDown(500).parent().toggleClass("activate");
            }
        });
    });


	/*=================== LightBox ===================*/
	$(function() {
	    var foo = $('.lightbox');
	    foo.poptrox({
	        usePopupCaption: true
	    });
	});

}); /*=== Document.Ready Ends Here ===*/


jQuery(window).load(function() {
    $('.parallax').scrolly({bgParallax: true});
}); /*=== Document.Ready Ends Here ===*/
