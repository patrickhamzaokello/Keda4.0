<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require 'connection.php';
/**
 * Helper class to fetch data from database and hand off to caller to send responses to the request
 * @connection connection object fetched from connection.php
 */
class Functions
{
    var $connection;

    function __construct()
    {
        $db = new Database();
        $this->connection = $db->getConnString();
    }

    function login($username, $password)
    {
        $db_id = "";
        $db_fullname = "";
        $db_user_name = "";
        $db_email = "";
        $db_password = "";
        $db_profile_photo = "";
        $result = [];
        if ($this->connection == null) {
            $result['success'] = false;
            $result['error'] = "An error occured during connection";
        } else {
            $statement = $this->connection->prepare('SELECT * FROM users WHERE username=? and password=?');
            $hash_pwd = md5($password);
            $statement->bind_param('ss', $username, $hash_pwd);
            $statement->bind_result($db_id, $db_fullname, $db_user_name, $db_email, $db_password, $db_profile_photo);
            if ($statement->execute()) {
                $statement->store_result();
                $statement->fetch();
                if ($statement->num_rows > 0) {
                    $result['user'] = [
                        'id' => $db_id,
                        'fullname' => $db_fullname,
                        'username' => $db_user_name,
                        'email' => $db_email,
                        'photo_url' => $db_profile_photo
                    ];
                } else {
                    $result['user'] = null;
                    $result['error'] = "Incorrect username and(or)password";
                }
                $result['success'] = true;
            } else {
                $result['success'] = false;
                $result['error'] = "An error occured during connection";
            }
        }
        header('Content-Type: application/json');
        echo json_encode($result);
    }



    function addLog($activities = "", $problems = "", $solutions = "", $logtype = "", $date = "", $userid = "")
    {
        $result = [];

        if ($this->connection == null) {
            $result['success'] == false;
            $result['error'] == "An error occurred during connection";
        } elseif ($this->connection) {
            $statement = $this->connection->prepare('INSERT INTO dailylogs (activities,problems, solutions, logtype,date, userid) VALUES (?,?,?,?,?,?)');
            $date = date("Y/m/d");
            $statement->bind_param('ssssss', $activities, $problems, $solutions, $logtype, $date, $userid);
            $statement->bind_result($activities, $problems, $solutions, $logtype, $date, $userid);
            if ($statement->execute()) {
                $statement->store_result();
                $statement->fetch();
                if ($statement->num_rows > 0) {
                } else {
                }
                $result['success'] = true;
                $result['log'] = [
                    'activities' => $activities,
                    'problems' => $problems,
                    'solutions' => $solutions,
                    'logtype' => $logtype,
                    'date' => $date,
                    'userid' => $userid
                ];
            } else {
                $result['success'] = false;
                $result['error'] = "An error occured during connection";
            }
        }

        header('Content-Type: application/json');
        echo json_encode($result);
    }
}
