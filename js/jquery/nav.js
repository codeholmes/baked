$(document).ready(function(){
    $("#headerButton1").click(function()
    {
        alert("You're in a Home Page!");
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

    $("#headerButton6").mouseover(function(){
        $(this).css("background-color", "#449aa0");
        $(this).css("color", "white");
    });
    $("#headerButton6").mouseout(function(){
        $(this).css("background-color", "aliceblue");
        $(this).css("color", "#449aa0");
    });

    $("#headerButton7").mouseover(function(){
        $(this).css("background-color", "#449aa0");
        $(this).css("color", "white");
    });
    $("#headerButton7").mouseout(function(){
        $(this).css("background-color", "aliceblue");
        $(this).css("color", "#449aa0");
    });

    $("#headerButton6").click(function()
    {
        window.location.href='login.html';
    });

    $("#headerButton7").click(function()
    {
        window.location.href='signup.html';
    });

});