<?php
session_start();
if ($_SESSION['username'] != '')
{
    //echo "LOGGED IN";
}
else
{
    //echo "Something went wrong! Login again.";
    header('location: http://localhost/baked/adminlogin.php');
    exit;
}
include('../pages/admin-header.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Dashboard | baked.</title>
        <link rel="icon" href="../img/favicon.ico" type="image/ico">
        <link rel="stylesheet" href="../css/admin-login.inc-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/admin-header.js"></script>
        <script src="../js/admin-fetch-data.js"></script>
    </head>
    <body>
        <hr>
        <div class="main-container">
            <div class="actionContainer">
                <div>
                <button class ="displayUserAccount" id="display"> Display User Details </button>
                <button class ="couponlink" id="coupon"> Create Coupon </button>
                </div>
            </div>
            <div class="box ">
                     

                <div hidden id="ResponseData" >
                </div>

                <div hidden id="actionContainer2">
                    <div class="coupon-title" >Add money with coupon</div>
                    <form name="CouponForm" action="../php/admin-create-coupon.php" method="POST">
                            <input class="coupon-code" name ="CouponCode" type="text"  placeholder="Enter coupon code"><br>
                            <input class="coupon-amount" name ="CouponAmount" type="text"  placeholder="Enter amount"><br>
                            <button class="create-coupon" type="submit" name="CreateCoupon">Create</button>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>

