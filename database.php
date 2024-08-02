<?php
$dsn = 'mysql:host=localhost; dbname = wesley';
$username = 'root';
$password = '';
try{
    $db = new PDO($dsn,$username,$password);
}catch(PDOException $e){
    $error_message = 'Database Error: ';
    $error_message .= '$e->getMessage()';
    echo $error_message;
    exit();
}
?>