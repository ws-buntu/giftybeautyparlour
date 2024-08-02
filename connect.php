<?php 

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone_number = filter_input(INPUT_POST, 'number');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');

if (!empty($name)) {
if (!empty($email)) {

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "wesley";	


             // Creating A Connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()) {
	die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());

} else {
	$sql = "INSERT INTO posts (name, email, number, subject)
	values ('$name', '$email', '$phone_number', '$subject')";

	if($conn->query($sql)){
		echo "New record inserted successfully";
	}else{
		echo "Error: ". $sql . "<br>" . $conn->error;
	}
	$conn->close();
}

	} else {
		echo "Email should not be empty";
		die();
	}
		
	// code...
} else {
	echo "Name should not be empty";
	die();
}



 ?>