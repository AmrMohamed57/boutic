<?php


include "../conn.php";

$id = $_GET['id'];

$del ="DELETE FROM brand where id= $id";

$query = $conn -> query($del);

if($query){
    header('location:../../brand.php');
}else{
    echo $conn -> $error;
}

?>