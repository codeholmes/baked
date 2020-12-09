$(document).ready(function(){
    $(".o2-box").mouseover(function(){
        $(".product-title-1").css("color", "white");
        $(".product-tagline-1").css("color", "grey");
        $(this).css("background-color", "#7623DE");
    });
    $(".o2-box").mouseout(function(){
        $(".product-title-1").css("color", "#449aa0");
        $(".product-tagline-1").css("color", "#CB4444");
        $(this).css("background-color", "#021516");
    });

    $(".h2o-box").mouseover(function(){
        $(".product-title-2").css("color", "white");
        $(".product-tagline-2").css("color", "grey");
        $(this).css("background-color", "#7623DE");
    });
    $(".h2o-box").mouseout(function(){
        $(".product-title-2").css("color", "#449aa0");
        $(".product-tagline-2").css("color", "#CB4444");
        $(this).css("background-color", "#021516");
    });

    $("#headerButton2").click(function() {
        $('html,body').animate({
            scrollTop: $(".compress-or-convert").offset().top},
            'slow');
    });

    $("#headerButton8").click(function()
    {
        $('html,body').animate({
            scrollTop: $(".compress-or-convert").offset().top},
            'slow');
    });

    $("#headerButton9").click(function()
    {
        window.location.href="signup.html";
    });

});