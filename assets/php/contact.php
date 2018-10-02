<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "pasistence_gms");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$name="";
$email="";
$message="";

if (isset($_POST['submit'])) {
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Submit successfully!!";


$sql = "INSERT INTO pasistence_gms.contact(name,email,message) VALUES ('$name','$email','$message')"; 
    
    $conn->query($sql);

    $sql = "SELECT * FROM pasistence_gms.contact";
    $userdata = $conn->query($sql);
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
	

	?>