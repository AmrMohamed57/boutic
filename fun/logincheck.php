<?php
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

include "conn.php";
$check = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$query = $conn -> query($check);

if($query -> num_rows > 0){
    $user = $query -> fetch_assoc();
    $id = $user['id'];
    
    $_SESSION['login_id'] = $id;
    header("location:../shop.php");
}else{
    $_SESSION['login_error'] = "<div class='alert alert-danger'>wrong credentials</div>";
    header("location:../login.php");
};




?>