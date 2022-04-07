<?php
require_once '../../functions.php';

$functions = new Functions();
$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'POST':
        $activities = (empty($_POST['activities'])) ? "" : $_POST['activities'];
        $problems = empty($_POST['problems']) ? "" : $_POST['problems'];
        $solutions = empty($_POST['solutions']) ? "" : $_POST['solutions'];
        $logtype = empty($_POST['logtype']) ? "" : $_POST['logtype'];
        $date = empty($_POST['date']) ? "" : $_POST['date'];
        $userid = empty($_POST['userid']) ? "" : $_POST['userid'];

        $functions->addLog($activities, $problems, $solutions, $logtype, $date, $userid);
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        header('Content-Type: application/json');
        $result = array();
        $result["success"] = false;
        $result["error"] = "Request method not allowed";
        // $result = array([
        //     "success" => false,
        //     'error' => "Request method not allowed"
        // ]);

        echo (json_encode($result));
        break;
}
