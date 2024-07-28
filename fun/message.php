<?php
// session_start();

$name =$_POST['myName'];
$phone =$_POST['myPhone'];
$email =$_POST['myEmail'];
$message =$_POST['myMessage'];

include "conn.php";


$insert="INSERT INTO contact(name , phone , email , message)Values
('$name' , '$phone' , '$email' , '$message')";

$query = $conn -> query($insert);

if($query){
    echo "<div class='alert alert-success'>Message Sent</div>";
}else{
    echo "<div class='alert alert-success'>Failed To Sent</div>";
}


// echo "Message Sent";


?>










