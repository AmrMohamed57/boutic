<?php


include "../conn.php";

$id = $_GET['id'];

$del ="DELETE FROM category where id= $id";

$query = $conn -> query($del);

if($query){
    header('location:../../category.php');
}else{
    echo $conn -> $error;
}

?>