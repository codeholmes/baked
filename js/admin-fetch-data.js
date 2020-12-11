$(document).ready(function() {

    $("#display").click(function() {                

        $.ajax({
        type: "GET",
        url: "admin-display.php",             
        dataType: "html",               
        success: function(response)
            {                    
            $("#ResponseData").html(response); 
            }

        });
    });
});