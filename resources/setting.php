<?php
session_start();
if ($_SESSION['username'] != '')
{
    //echo "LOGGED IN";
}
else
{
    //echo "Something went wrong! Login again.";
    header('location: http://localhost/baked/login.php');
    exit;
}

include('../pages/header.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/setting-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/setting.js"></script>
        <script src="../js/jquery/header.js"></script>
        <script src="../js/coupon-validate.js"></script>
        <script src="js/login-validate"></script>
    </head>
    <body>
        <div class="main-container">

            <div class="box-0">
                <div class="side-nav-1 side-nav-text"> Profile</div>
                <div class="side-nav-2 side-nav-text"> Wallet</div>
                <div class="side-nav-3 side-nav-text"> Subscription</div>
                <div class="side-nav-4 side-nav-text"> Setting</div>
            </div>
                
            <div>
                <div class="profile-box-1-color">
                    <div class="profile-container">
                        <div class ="myAccount">MY ACCOUNT</div>
                        <div class ="myAccountContent">
                            <?php
                            require_once('../db/db-conn.php');
                            $getUsername = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM user_account WHERE username='".($_SESSION['username'])."'"));
                            ?>

                            <form name="UpdateForm" action="../php/update-account.php" onclick="return ValidateUpdate();" method="POST">
                            <label> Username:  </label>
                            <input class="UsernameFloat" name=NewUsername type ="text" placeholder ="<?php echo $getUsername["username"] ?>">
                            <button id="UpdateUsername" type ="submit" name="UpdateUsername"> Update</button> 
                            </form>

                            <label> Email: </label>                      
                            <?php
                            $getEmail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT email FROM user_account WHERE username='".($_SESSION['username'])."'"));
                            ?>

                            <input class="EmailFloat" name=NewEmail type ="text" placeholder ="<?php echo ($getEmail["email"]); ?>">
                            <button type ="submit"> Update</button> <br>
                            <?php
                            $getPassword = mysqli_fetch_assoc(mysqli_query($conn, "SELECT password FROM user_account WHERE username='".($_SESSION['username'])."'"));
                            ?> 

                            <label> Password: </label>
                            <input class="Password1Float" name=NewPassword1 type ="password" placeholder ="<?php echo preg_replace("|.|", "*", $getPassword["password"]);?>"><br>
                            <label> Confirm Password: </label>
                            <input class="Password2Float" name=NewPassword2 type ="password" placeholder ="<?php echo preg_replace("|.|", "*", $getPassword["password"]);?>">
                            <button type ="submit"> Update</button> <br>
                        </div>
                    </div>
                </div>
                <div hidden class="wallet-box-1-color">
                    <div class="amount-title" >Amount left</div>
                    <div class="amount">
                        <?php $getAmount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT amount FROM user_wallet wallet, user_account user WHERE user.username='".($_SESSION['username'])."' AND user.user_id = wallet.user_id"));
                        echo $getAmount["amount"]?> INR 
                    </div>
                    <div class="wallet-title" >Add money with coupon</div>
                    <div>
                    <form name="CouponForm" action="../php/validate-coupon.php" onsubmit="return ValidateCoupon();" method="POST">
                        <input class="coupon-code" type="text" name ="CouponCode" placeholder="Enter coupon code">
                        <button class="add-money" type="submit" name="AddMoney">Add</button>
                    </form> 
                    </div>
                </div>
                <div hidden class="subs-box-1-color">
                    <div class="subs-title">Nothing to show.</div>

                </div>
                <div hidden class="setting-box-1-color">
                        <div class="setting-title">Account Removal</div>
                        <div class="setting-deeds"> Be care, account can't be recovered, as well as data, once deleted.<br>
                            Account terminate immediately.
                        </div>
                        <button name="deleteKey" type="submit" class="delete-button"> Delete</button>
                </div>
            </div>

        </div>
    </body>
</html>