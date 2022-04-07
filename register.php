<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require "includes/config.php";
require "includes/classes/Account.php";
require "includes/classes/Constants.php";
require "includes/classes/User.php";

$resultFeedback = [];

try {
    $db = new Database();
    $con = $db->getConnString();
    $account = new Account($con);
} catch (\Throwable $th) {
    //throw $th;

    $resultFeedback([
        "success" => false,
        "error" => "Connection Failed"
    ]);

    header('Content-Type: application/json');
    echo json_encode($resultFeedback);
}


require "includes/handlers/register-handler.php";
require "includes/handlers/login-handler.php";

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YNG3P75VXH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YNG3P75VXH');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#140721" />

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="browserconfig.xml">

    <!-- favicon end  -->

    <title>Mwonyaa Stream Sign-Up</title>
    <link rel="icon" href="assets/images/musiclogo.png" type="image/png">


    <link href="staticFiles/signup/css/bootstrap.min.css" rel="stylesheet">
    <link href="staticFiles/signup/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="staticFiles/signup/css/animate.css" rel="stylesheet">
    <link href="staticFiles/signup/css/style.css" rel="stylesheet">

    <script src="staticFiles/signup/js/jquery-3.1.1.min.js"></script>
    <script src="staticFiles/signup/js/register.js"></script>

</head>



<body class="gray-bg">
    <?php

    if (isset($_POST['registerButton'])) {
        echo '<script>
            $(document).ready(function() {
                $("#loginForm").hide();
                $("#registerForm").show();
            });
        </script>';
    } else {
        echo '<script>
            $(document).ready(function() {
                $("#loginForm").show();
                $("#registerForm").hide();
            });
        </script>';
    }

    ?>


    <div class="registerformpage">
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div class="wholebox">
            <a href="index"><h1 class="textmain">Mwonyaa Stream</h1></a>

                <div id="loginForm">

                    <p class="textlabel">Continue to the browse page without signing up
                    </p>
                    <a href="index">
                        <p class="continueguesbutton">Continue without signup</p>
                    </a>
                    <h1 class="textmain">Sign Into Your Account</h1>
                    <p class="textlabel">Listen and Enjoy Quality Entertainment from your Favourite Artists
                    </p>

                    <span class="formerror"><?php echo $account->getError(Constants::$ConnectionProblem); ?></span>

                    <form class="m-t" role="form" action="register" method="POST">
                        <?php
                        //  login.php
                        echo '<input type="hidden" name="location" value="';
                        if (isset($_GET['location'])) {
                            echo htmlspecialchars($_GET['location']);
                        }
                        echo '" />';

                        ?>
                        <div class="form-group">
                            <span class="formerror"><?php echo $account->getError(Constants::$loginFailed); ?></span>
                            <span class="loginlabel">Email / Username * </span>
                            <input type="text" class="form-control" placeholder="Username / Email" id="loginUsername" name="loginUsername" value="<?php getInputValue('loginUsername') ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <span class="loginlabel">Password * </span>

                            <input id="loginPassword" name="loginPassword" type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" name="loginButton" class="btn btn-primary block full-width m-b">Login</button>
                        <a class="btn btn-sm btn-white btn-block mb-2" id="hideLogin">Create an Account</a>

                        <!-- <a href="#"><small>Forgot password?</small></a> -->
                        <p class="text-muted text-center"><small>Do not have an account?</small></p>
                    </form>
                </div>

                <div id="registerForm">
                    <h3 class="textmain">Create New Account</h3>
                    <p class="textlabel">Creating an Account allows you to access all the Premium Features and Many more!</p>
                    <span class="formerror"><?php echo $account->getError(Constants::$ConnectionProblem); ?></span>

                    <form class="m-t" role="form" action="register" method="POST">

                        <?php
                        //  login.php
                        echo '<input type="hidden" name="location" value="';
                        if (isset($_GET['location'])) {
                            echo htmlspecialchars($_GET['location']);
                        }
                        echo '" />';

                        ?>

                        <div class="form-group">
                            <span class="formerror"><?php echo $account->getError(Constants::$usernameCharacters); ?></span>
                            <span class="formerror"><?php echo $account->getError(Constants::$usernameTaken); ?></span>
                            <span class="loginlabel">Username * </span>
                            <input class="form-control" id="username" name="username" type="text" placeholder="Username" value="<?php getInputValue('username') ?>" required>
                        </div>
                        <div class="form-group">
                            <span class="formerror"><?php echo $account->getError(Constants::$firstNameCharacters); ?></span>
                            <span class="loginlabel">FullName * </span>
                            <input class="form-control" id="firstName" name="firstName" type="text" placeholder="Full Name" value="<?php getInputValue('firstName') ?>" required>
                        </div>

                        <div class="form-group">
                            <span class="formerror"><?php echo $account->getError(Constants::$emailsDontMatch); ?></span>
                            <span class="formerror"><?php echo $account->getError(Constants::$emailInvalid); ?></span>
                            <span class="formerror"><?php echo $account->getError(Constants::$emailTaken); ?></span>
                            <span class="loginlabel">Email * </span>

                            <input class="form-control" id="email" name="email" type="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
                        </div>

                        <div class="form-group">
                            <span class="formerror"><?php echo $account->getError(Constants::$passwordsDoNoMatch); ?></span>
                            <span class="formerror"><?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?></span>
                            <span class="formerror"><?php echo $account->getError(Constants::$passwordCharacters); ?></span>
                            <span class="loginlabel">Password * </span>

                            <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                        </div>

                        <div class="form-group">
                            <span class="loginlabel">Confirm Password * </span>

                            <input class="form-control" id="password2" name="password2" type="password" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                            <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy
                                </label></div>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b" name="registerButton">Register</button>

                        <a class="btn btn-sm btn-white btn-block" id="hideRegister">Login</a>
                        <p class="text-muted text-center"><small>Already have an account?</small></p>

                    </form>
                    <a href="index">
                        <p class="continueguesbutton">Continue without signup</p>
                    </a>

                </div>

                <p class="m-t"> <small>Mwonyaa Music App &copy; 2020</small> </p>
            </div>
        </div>
    </div>







    <!-- Mainly scripts -->

    <script src="https://d1d1i04hu392ot.cloudfront.net/staticFiles/signup/js/popper.min.js"></script>
    <script src="https://d1d1i04hu392ot.cloudfront.net/staticFiles/signup/js/bootstrap.js"></script>
    <!-- iCheck -->
    <script>
        $(document).ready(function() {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

</body>

</html>