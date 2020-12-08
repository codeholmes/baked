$(document).ready(function(){

    $(".subs-now").mouseover(function(){
        $(".subs-now").css("background-color", "#497f83");
    });
    $(".subs-now").mouseout(function(){
        $(".subs-now").css("background-color", "#6e778078");
    });

    $(".subs-now").click(function(){

            window.location.href="../resources/setting.php";
        });
});