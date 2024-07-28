<?php
session_start();
$user =$_POST['username'];
$address =$_POST['address'];
$email =$_POST['email'];
$gender =$_POST['gender'];
$pass =md5($_POST['password']);


include "conn.php";
$insert="INSERT INTO users
(username , password ,address, email , gender , pr) VALUES
('$user' , '$pass' , '$address' , '$email' , '$gender' , '4')";

$query = $conn -> query($insert);

if($query){
    $select ="SELECT * FROM users ORDER BY id DESC LIMIT 1";
    $query = $conn -> query($select);
    $result = $query -> fetch_assoc();
    $id = $result['id'];
    $_SESSION['login_id'] = $id;
    header("location:../shop.php");
    
}else{
    echo $conn -> error;
}





?>