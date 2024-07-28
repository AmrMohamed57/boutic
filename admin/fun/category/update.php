<?php

include "../conn.php";


if($_SERVER['REQUEST_METHOD'] != "POST"){

    header("location:../../category.php");
    exit();

}



$id = $_POST['id'];
$name = $_POST['name'];



$update = "UPDATE category SET
    name = '$name' 
    WHERE id = $id
    ";

$query = $conn -> query($update);

if($query){
    header("location:../../category.php");
}else{
    echo $conn -> error;
}


?>