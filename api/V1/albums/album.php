<?php
require_once '../../functions.php';

$functions = new Functions();
$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'POST':
        $username = empty($_POST['username']) ? "" : $_POST['username'];
        $password = empty($_POST['password']) ? "" : $_POST['password'];
        $functions->login($username, $password);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        header('Content-Type: application/json');
        $result = array();
        $result["success"] = false;
        $result["error"] = "Request method not allowed";
        echo (json_encode($result));
        break;
}