$(document).ready(function(){

    $("#headerButton1").mouseover(function(){
        $(this).css("color", "#449aa0");
    });
    $("#headerButton1").mouseout(function(){
        $(this).css("color", "grey");
    });

    $("#headerButton2").mouseover(function(){
        $(this).css("color", "#449aa0");
    });
    $("#headerButton2").mouseout(function(){
        $(this).css("color", "grey");
    });

    $("#headerButton3").mouseover(function(){
        $(this).css("color", "#449aa0");
    });
    $("#headerButton3").mouseout(function(){
        $(this).css("color", "grey");
    });

    $("#headerButton4").mouseover(function(){
        $(this).css("color", "#449aa0");
    });
    $("#headerButton4").mouseout(function(){
        $(this).css("color", "grey");
    });

    $("#headerButton5").mouseover(function(){
        $(this).css("color", "#449aa0");
    });
    $("#headerButton5").mouseout(function(){
        $(this).css("color", "grey");
    });

    $("#profileID").mouseover(function(){
        $(this).css("color", "white");
        $(this).css("color", "bold");
    });
    $("#profileID").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
    });

    $("#walletID").mouseover(function(){
        $(this).css("color", "white");
    });
    $("#walletID").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
    });

    $("#subsID").mouseover(function(){
        $(this).css("color", "white");
    });
    $("#subsID").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
    });

    $("#logoutID").mouseover(function(){
        $(this).css("color", "white");
        $(this).css("background-color", "#a0324a");
    });
    $("#logoutID").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
        $(this).css("background-color", "#a53d54");
    });
    $("#logoutID").click(function()
    {
        window.location.href="../php/logout-user.php";
    });
    $("#profileID").click(function()
    {
        window.location.href="../resources/setting.php";
    });
    $("#headerButton5").click(function()
    {
        window.location.href="../resources/upload-media.php";

    });
    $(".loginHomeLink").click(function()
    {
        window.location.href="../resources/login.inc.php";
    });


});