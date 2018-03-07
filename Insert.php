<?php
include 'inc/connection.php';
session_start();
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Email = $_POST['Email'];
$messageTitle = $_POST['reviewTitle'];
$Message = $_POST['message'];
$websiteAddress = $_POST['websiteAddress'];
$date  = time();
$timestamp = strtotime($date);
$sql5 =  "INSERT INTO information (firstname, lastname, email, reviewTitle, review, url, date) VALUES ('$firstName', '$lastName','$Email', '$messageTitle', '$Message', '$websiteAddress', '$date')";

if ($conn->query($sql5) === true) {
    echo "";
} else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;
    die();
}

$alert = "Thanks for your message!";
echo "<script type='text/javascript'>alert('$alert');</script>";
header("refresh:0.1; url=index.php");
?>
