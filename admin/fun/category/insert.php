<?php


if($_SERVER['REQUEST_METHOD'] != "POST"){

    header("location:../../category.php");
    exit();

}

    $name = $_POST['name'];
    $type = $_POST['type'];

    include "../conn.php";

    if($type ==0){
        $insert ="INSERT INTO category
    (name , parent) 
    values
    ('$name' , '0')";
    }else{
        $insert ="INSERT INTO category
    (name , parent) 
    values
    ('$name' , '$parent')";
    }

    $query = $conn -> query($insert);

    if($query){
        header("location:../../category.php");
    }else{
        echo $conn -> error;
    }



?>