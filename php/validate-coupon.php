<?php
session_start();
if ($_SESSION['username'] != '')
{
    echo "testing0";
    //echo "LOGGED IN";
    if (isset($_POST['AddMoney']))
    {
        require_once('../db/db-conn.php');
        //echo "testing1";
        $Coupon = strval(strtoupper($_POST['CouponCode']));

        $query1 = "SELECT coupon_name FROM coupon where coupon_name = '".$Coupon."'";

        //echo " ";
        //echo $query1;
        //echo " ";
        //echo $Coupon;
        
        $getCouponCode = mysqli_fetch_assoc(mysqli_query($conn, $query1)); //cross check

        if ($Coupon == strval($getCouponCode['coupon_name']))
        {
            if (mysqli_query($conn, $query1))
            {
                //echo "testing2";

                // get amount
                $query2 = "SELECT coupon_amount FROM coupon WHERE coupon_name = '".$Coupon."';";
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
        {
            // NOT MATCHED!!!! GO BACK!!!
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