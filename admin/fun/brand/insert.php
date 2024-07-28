<?php


if($_SERVER['REQUEST_METHOD'] != "POST"){

    header("location:../../brand.php");
    exit();

}

    $name = $_POST['name'];

    include "../conn.php";

    $insert ="INSERT INTO brand
    (name) 
    values
    ('$name')";

    $query = $conn -> query($insert);

    if($query){
        header("location:../../brand.php");
    }else{
        echo $conn -> error;
    }



?>