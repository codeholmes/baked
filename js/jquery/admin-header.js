$(document).ready(function(){
    $("#logoutID").click(function()
    {
        window.location.href="../php/admin-logout.php";
    });

    $("#display").click(function()
    {
        $("#ResponseData").show();
        $("#actionContainer2").hide();
    });

    $("#coupon").click(function()
    {
        $("#actionContainer2").show();
        $("#ResponseData").hide();
    });
});