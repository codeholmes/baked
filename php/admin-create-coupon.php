<?php
if (isset($_POST['CreateCoupon']))
{
    require_once('../db/db-conn.php');

    $coupon_code = $_POST['CouponCode'];
    $coupon_amount = $_POST['CouponAmount'];

    if(!empty($coupon_code) && !empty($coupon_amount) )
    {
        $query ="INSERT into coupon (coupon_name, coupon_amount) VALUES ('$coupon_code', '$coupon_amount');";
        
        if (mysqli_query($conn, $query))
        {
            // echo "Coupon created!";
            sleep(2);
            header("Location: http://localhost/baked/php/coupon-created=success.php");
            exit;
        }
        else
        {
            echo "Error: ".$query."<br>".mysqli_error($conn);
        }
    }
}