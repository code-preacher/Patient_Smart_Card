
<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
if (isset($_POST['track'])) {
$crud->checkId($_POST['file_no']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AUTOMATED HEALTHCARE SYSTEM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(login/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        TRACK CARD
                    </span>
                </div>

                <form class="login100-form validate-form" action="track.php" method="post">
                    <?php $lib->msg();?>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Card Number</span>
                        <input class="input100" type="text" name="file_no" placeholder="Enter File Number">
                        <span class="focus-input100"></span>
                    </div>

                    <br><br>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="track">
                          Track
                        </button>
                    </div>
                    <br><br>
                    <div class="flex-sb-m w-full p-b-30">
                        
                        <div>
                            <a href="index.php" class="txt1">
                                Back to Home 
                            </a>&nbsp;&nbsp;
                            |
                        &nbsp;&nbsp;    <a href="reg.php" class="txt1">
                                Create account
                            </a>
                             &nbsp;&nbsp;  |
                        &nbsp;&nbsp;    <a href="login.php" class="txt1">
                                Login
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/daterangepicker/moment.min.js"></script>
    <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="login/js/main.js"></script>

</body>
</html>