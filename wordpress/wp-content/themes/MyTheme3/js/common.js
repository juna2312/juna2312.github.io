$(document).ready(function() {

    $("#portfolio_grid").mixItUp();

    $(".s_portfolio .row li").click(function() {
        $(".s_portfolio .row li").removeClass("active");
        $(this).addClass("active");
    });

    $(".popup").magnificPopup({type:"image"});
    $(".popup_content").magnificPopup({
        type:"inline",
        midClick: true
    });

    // $(".top_text h1").animated("fadeInDown", "fadeOutUp");
    $(".section_header").animated("fadeInUp", "fadeOutDown");

    $(".animation_1").animated("flipInY", "flipOutDown");
    $(".animation_2").animated("fadeInLeft", "fadeOutDown");
    $(".animation_3").animated("fadeInRight", "fadeOutDown");

    $(".left .resume_item").animated("fadeInLeft", "fadeOutDown");
    $(".right .resume_item").animated("fadeInRight", "fadeOutDown");

    $(".top_text p, .section_header").animated("fadeInUp", "fadeOutDown");


    function heightDetect(){
        $(".main_head").css("height", $(window).height());
        $(".top_wrapper").css("height", $(window).height());
    };
    heightDetect();

    $(window).resize(function(){
        heightDetect();
    });


    $(".toggle_menu").click(function() {
        $(".sandwich").toggleClass("active");
    });
    $(".top_menu ul a").click(function() {
        $(".top_menu").fadeOut(600);
        $(".sandwich").toggleClass("active");
        $(".top_text").css("opacity", "1");
    }).append("<span>");

    $(".toggle_menu").click(function() {
        if ($(".top_menu").is(":visible")) {
            $(".top_text").css("opacity", "1");
            $(".top_menu").fadeOut(600);
            $(".top_menu li a").removeClass("fadeInUp animated");
        } else {
            $(".top_text").css("opacity", ".1");
            $(".top_menu").fadeIn(600);
            $(".top_menu li a").addClass("fadeInUp animated");
        };
    });
    $("input,select,textarea").jqBootstrapValidation();
});


$(window).load(function() {
    $(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");
}); 
