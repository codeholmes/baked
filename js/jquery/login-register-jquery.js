$(document).ready(function(){

    $(".LoginBtnColor").mouseover(function(){
        $(".LoginBtnColor").css("background-color", "#497f83");
    });
    $(".LoginBtnColor").mouseout(function(){
        $(".LoginBtnColor").css("background-color", "#449aa0");
    });

    $(".SignupBtnColor").mouseover(function(){
        $(".SignupBtnColor").css("background-color", "#497f83");
    });
    $(".SignupBtnColor").mouseout(function(){
        $(".SignupBtnColor").css("background-color", "#449aa0");
    });

    $(".brand-pointer").click(function()
    {
        window.location.href='index.php';
    });

    $(".Create-Account-2").click(function()
    {
        window.location.href='signup.html';
    });

    $(".BackToLogin-2").click(function()
    {
        window.location.href='login.html';
    });

});