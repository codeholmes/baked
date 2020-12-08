$(document).ready(function(){
    $("#dropdownID").mouseover(function(){
        $(this).css("color", "white");
        $(this).css("background-color", "#449aa0");
    });
    $("#dropdownID").mouseout(function(){
        $(this).css("color", "rgb(218, 213, 213)");
        $(this).css("background-color", "#6e778078");
    });

    $("#dropdownID").click(function(){
        $("#dropdownContent").toggle();
    });
});