<?php


include "../conn.php";

$id = $_GET['id'];

$del ="DELETE FROM products where id= $id";

$query = $conn -> query($del);

if($query){
    header('location:../../products.php');
}else{
    echo $conn -> $error;
}

?>