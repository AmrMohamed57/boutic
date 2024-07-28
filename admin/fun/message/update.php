<?php
    
    include "../conn.php";
    $id = $_GET['id'];
    $update="UPDATE contact SET
    status = 1
    WHERE id = $id";
    $query = $conn -> query($update);

    if($query){
        header('location:../../message.php');
    }else{
        echo $conn -> $error;
    }
    // echo "read";
?>