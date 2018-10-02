<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "pasistence_gms");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$name="";
 $email="";
 $mobile="";
 $service="";
 $message="";
 if (isset($_POST['submit'])) {
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$message=$_POST["message"]; 
 }	

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
						  }
else
	
//echo "Submitted successfully!!";

$sql = " INSERT INTO pasistence_gms.connectquick(name, email, mobile,message) VALUES ('$name','$email','$mobile','$message')"; 
    
    $conn->query($sql);

    $sql = "SELECT * FROM pasistence_gms.connectquick";
    $userdata = $conn->query($sql);
	
?>
