<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/admin-header-styles.css">
        <script src="../js/jquery/jquery-3.5.1.js"></script>
        <script src="../js/jquery/dropdown.js"></script>
        <script src="../js/jquery/header.js"></script>
        <script src="../js/jquery/admin-header.js"></script>
    </head>
    <body>
        <nav id ="header">
            <div class= "nav-links">

                <div class="adminDash"><strong class="adminDashText">Admin Dashboard</strong></div>

                <div class="hello-user">  Hello <?php echo ($_SESSION['username']) ?>! &#128075 </div>
                <div class="dropdown-container">
                    <div id="dropdownID" class="nav-account">Account</div> 
                    <div hidden id="dropdownContent" class="account-content">
                        <div id="logoutID" class="logout"> Log out </div>
                    </div>
                </div>  
            </div> 
        </nav>
    </body>