<?php

if (!isset($_SESSION['login_user'])) {
    header("location:login");
    die();
} else {
    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($con, "select username from users where email = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['username'];
}
