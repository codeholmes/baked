<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/header-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/dropdown.js"></script>
        <script src="../js/jquery/header.js"></script>
    </head>
    <body>
        <nav id ="header">
            <div class= "nav-links">

                <div class="logo"><strong class="homeLink">baked.</strong></div>
                <div class= "nav-links-2"> <strong id="headerButton1" class="loginHomeLink">Home</strong></div>
                <div class= "nav-links-2"> <strong id="headerButton5" class="homeLink">Upload</strong></div>
                <div class= "nav-links-2"> <strong id="headerButton2" class="homeLink">Compress</strong></div>
                <div class= "nav-links-2"> <strong id="headerButton3" class="homeLink">Convert</strong></div>
                <div class= "nav-links-2"> <strong id="headerButton4" class="homeLink">Download</strong></div>

                <div class="hello-user">  Hello <?php echo ($_SESSION['username']) ?>! &#128075 </div>
                <div class="dropdown-container">
                    <div id="dropdownID" class="nav-account">Account</div> 
                    <div hidden id="dropdownContent" class="account-content">
                        <div id="profileID" class="setting"> Profile</div>
                        <div id="walletID" class="setting"> Wallet</div>
                        <div id="subsID" class="setting"> Subscription</div>
                        <div id="logoutID" class="logout"> Log out </div>
                    </div>
                </div>  
            </div> 
        </nav>
    </body>