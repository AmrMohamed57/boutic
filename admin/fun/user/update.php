<?php

include "../conn.php";


if($_SERVER['REQUEST_METHOD'] != "POST"){

    header("location:../../users.php");
    exit();

}



$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];


if(!empty($_POST['password'])){
    $pass = $_POST['password'];
    $update_pass = "UPDATE users SET password ='$pass' WHERE id = $id";
    $query_pass = $conn -> query($update_pass);
};




$update = "UPDATE users SET
    username = '$username' ,
    email = '$email' ,
    address = '$address' ,
    gender = '$gender' ,
    pr = '$priv' 
    WHERE id = $id
    ";

$query = $conn -> query($update);

if($query){
    header("location:../../users.php");
}else{
    echo $conn -> error;
}


?>