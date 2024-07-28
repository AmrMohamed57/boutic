<?php


include "../fun/conn.php";

$id = $_GET['id'];

$del ="DELETE FROM cart where id= $id";

$query = $conn -> query($del);

if($query){
    header('location:../cart.php');
}else{
    echo $conn -> $error;
}

?>