<?php

include "../conn.php";


if($_SERVER['REQUEST_METHOD'] != "POST"){

    header("location:../../products.php");
    exit();

};



$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$count = $_POST['count'];
$category = $_POST['category'];
$brand = $_POST['brand'];
$description = $_POST['description'];



$update = "UPDATE products SET
    name = '$name',
    price = '$price',
    count = '$count',
    cat = '$category',
    brand = '$brand',
    description = '$description'
    WHERE id = $id";
$query = $conn -> query($update);

if($query){
    header("location:../../products.php");
}else{
    echo $conn -> error;
};






?>