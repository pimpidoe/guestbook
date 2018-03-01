<?php
include 'inc/connection.php';
session_start();
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['Email'];
$Message = $_POST['message'];
$websiteAddress = $_POST['websiteAddress'];
$date  = time();
$timestamp = strtotime($date);
$sql5 =  "INSERT INTO information (firstname, lastname, email, review, url, date) VALUES ('$firstName', '$lastName','$Email', '$Message', '$websiteAddress', '$date')";

if ($conn->query($sql5) === true) {
    echo "";
} else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;
    die();
}
// include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
//
//     $securimage = new Securimage();
//
//     if ($securimage->check($_POST['captcha_code']) == false) {
//         // the code was incorrect
//         // you should handle the error so that the form processor doesn't continue
//
//         // or you can use the following code if there is no validation or you do not know how
//         echo "The security code entered was incorrect.<br /><br />";
//         echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
//         exit;
//     }

$alert = "Thanks for your message!";
echo "<script type='text/javascript'>alert('$alert');</script>";
header("refresh:0.1; url=index.php");
?>
