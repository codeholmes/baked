<?php
if ($_SERVER["HTTP_REFERER"] == "http://localhost/baked/resources/admin-login.inc.php")
    {
        echo "<script> alert('Coupon Created Successfully!.') </script>";
    }
if (1==1)
{
    header("Location: http://localhost/baked/php/admin-create-coupon.php"); 
    exit;
}