<?php


include "../conn.php";

$id = $_GET['id'];

$del ="DELETE FROM users where id= $id";

$query = $conn -> query($del);

if($query){
    header('location:../../users.php');
}else{
    echo $conn -> $error;
}

?>