<?php
include("config.php");

$db = new Database();
$con = $db->getConnString();

$errors = [];
$data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $childname = mysqli_real_escape_string($con, $_POST['childname']);
    $sponsorname = mysqli_real_escape_string($con, $_POST['sponsorname']);
    $sponsoremail = mysqli_real_escape_string($con, $_POST['sponsoremail']);
    $sponsoramount = mysqli_real_escape_string($con, $_POST['sponsoramount']);
    $sponsormessage = mysqli_real_escape_string($con, $_POST['sponsormessage']);


   
    if (empty($_POST['sponsoremail'])) {
        $errors['sponsoremail'] = 'Email is required.';
    }

    if (empty($_POST['sponsoramount'])) {
        $errors['sponsoramount'] = 'Amount   is required.';
    }

    if (empty($_POST['childname'])) {
        $errors['childname'] = 'Child Name  is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $sponsorchild = "INSERT INTO childsponsorship (childname, sponsorname, sponsoremail, amount, message) VALUES ('$childname', '$sponsorname', '$sponsoremail', '$sponsoramount','$sponsormessage')";
        // $sponsorchild = "INSERT INTO childsponsorship (childname, sponsorname, sponsoremail, amount, message) VALUES ('111', '231', '1171', '1151','234')";


        if (mysqli_query($con,$sponsorchild) === TRUE) {
            $data['success'] = true;
            $data['message'] = 'Message Sent, We shall Reachout to you soon!';
        } else {
            $data['success'] = false;
            $data['message'] = $sponsoremail;
        }
    }
}

echo json_encode($data);