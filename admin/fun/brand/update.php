<?php

include "../conn.php";


if($_SERVER['REQUEST_METHOD'] != "POST"){

    header("location:../../brand.php");
    exit();

}



$id = $_POST['id'];
$name = $_POST['name'];



$update = "UPDATE brand SET
    name = '$name' 
    WHERE id = $id
    ";

$query = $conn -> query($update);

if($query){
    header("location:../../brand.php");
}else{
    echo $conn -> error;
}


?>