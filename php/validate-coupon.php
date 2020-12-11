<?php
session_start();
if ($_SESSION['username'] != '')
{
    //echo "testing0";
    //echo "LOGGED IN";
    if (isset($_POST['AddMoney']))
    {
        //echo "testing1";
        $CouponCode = $_POST['CouponCode'];
        include('../db/db-conn.php');

        $query1 = "SELECT coupon_name FROM coupon where coupon_name = '".$CouponCode."'";

        // cross check
        if ($CouponCode == $query1)
        {
            if (mysqli_query($conn, $query1))
            {
                //echo "testing2";

                // get amount
                $query2 = "SELECT coupon_amount FROM coupon WHERE coupon_name = '".$CouponCode."';";
                $getCouponAmount = mysqli_fetch_assoc(mysqli_query($conn, $query2));
    
                // appending new amount to previous amount by using += instead replace/update
                $query3 ="UPDATE user_wallet SET amount = amount + '".$getCouponAmount['coupon_amount']."' WHERE (user_wallet.user_id IN (SELECT user_id from user_account WHERE (username = '".($_SESSION['username'])."')))";
                
                if (mysqli_query($conn, $query3))
                {
                    // coupon added
                    header("Location: http://localhost/baked/resources/setting.php");
                    exit;
                }
                else
                {
                    echo "Error: ".$query3."<br>".mysqli_error($conn);
                }
            }
            else
            {
                echo "Error: ".$query3."<br>".mysqli_error($conn);
            }
        }
        else
        {
            // no such coupon exist
            header("Location: http://localhost/baked/resources/setting.php");
            exit;
        }
    }
}
else
{
    //echo "Something went wrong! Login again.";
    header('location: http://localhost/baked/login.php');
    exit;
}