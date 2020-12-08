$(document).ready(function(){
    $(".side-nav-1").mouseover(function(){
        $(this).css("color", "rgb(231, 222, 222)");
        $(this).css("border-color", "#449aa0");
        $(this).css("background-color", "#449aa0");
    });
    $(".side-nav-1").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
        $(this).css("border-color", "#264547");
        $(this).css("background-color", "#6e778078");
    });

    $(".side-nav-2").mouseover(function(){
        $(this).css("color", "rgb(231, 222, 222)");
        $(this).css("border-color", "#449aa0");
        $(this).css("background-color", "#449aa0");
    });
    $(".side-nav-2").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
        $(this).css("border-color", "#264547");
        $(this).css("background-color", "#6e778078");
    });

    $(".side-nav-3").mouseover(function(){
        $(this).css("color", "rgb(231, 222, 222)");
        $(this).css("border-color", "#449aa0");
        $(this).css("background-color", "#449aa0");
    });
    $(".side-nav-3").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
        $(this).css("border-color", "#264547");
        $(this).css("background-color", "#6e778078");
    });


    $(".side-nav-4").mouseover(function(){
        $(this).css("color", "rgb(231, 222, 222)");
        $(this).css("border-color", "#449aa0");
        $(this).css("background-color", "#449aa0");
    });
    $(".side-nav-4").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
        $(this).css("border-color", "#264547");
        $(this).css("background-color", "#6e778078");
    });


    $(".side-nav-5").mouseover(function(){
        $(this).css("color", "rgb(231, 222, 222)");
        $(this).css("border-color", "#449aa0");
        $(this).css("background-color", "#449aa0");
    });
    $(".side-nav-5").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
        $(this).css("border-color", "#264547");
        $(this).css("background-color", "#6e778078");
    });

    $(".side-nav-1").click(function(){
        $(".profile-box-1-color").show();
        $(".wallet-box-1-color").hide();
        $(".subs-box-1-color").hide();
        $(".setting-box-1-color").hide();
    });

    $(".side-nav-2").click(function(){
        $(".profile-box-1-color").hide();
        $(".wallet-box-1-color").show();
        $(".subs-box-1-color").hide();
        $(".setting-box-1-color").hide();
    });

    $(".side-nav-3").click(function(){
        $(".profile-box-1-color").hide();
        $(".wallet-box-1-color").hide();
        $(".subs-box-1-color").show();
        $(".setting-box-1-color").hide();
    });

    $(".side-nav-4").click(function(){
        $(".profile-box-1-color").hide();
        $(".wallet-box-1-color").hide();
        $(".subs-box-1-color").hide();
        $(".setting-box-1-color").show();
    });

    $('.side-nav-1').on('click mouseover', function(){
        $(this).css("background-color", "#449aa0");
    });

    $(".delete-button").click(function()
    {
        window.location.href="../php/setting-delete-user.php";
    });

    $("#UpdateUsername").click(function()
    {
        window.location.href="../php/update-account.php";
    });

});
