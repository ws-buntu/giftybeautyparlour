<?php
// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $pnumber = $_POST['number'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];



// $email_from = 'info@cskwesley.xyz';
// $email_subject = 'New Form Submission';
// $email_body = "User Name: $name.\n".
//               "User Email: $visitor_email.\n".
//               "Subject: $subject.\n".
//               "User Message: $message.\n";
         
// $to = 'wacks925@gmail.com';

// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";

// mail($to,$email_subject,$email_body,$headers);

// header("Location: contact.html");



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
        // echo "New record inserted successfully";
        header('Location:view_contact.php');
    }// else{
    //     echo "Error: ". $sql . "<br>" . $conn->error;
    // }
    // $conn->close();
}

    } else {
        // echo "Email should not be empty";
        die();
    }
        
    
} else {
    // echo "Name should not be empty";
    die();
}



?>